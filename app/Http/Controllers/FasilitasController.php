<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;

class FasilitasController extends Controller
{
    // 1. Tampilkan Semua Fasilitas di Dashboard Admin
    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    // 2. Tampilkan Form Tambah Data
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    // 3. Proses Simpan Data Baru + Upload Foto ke Supabase Storage
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:100',
            'deskripsi'      => 'required|string',
            'foto'           => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // Maksimal 2MB
        ]);

        $data = $request->only(['nama_fasilitas', 'deskripsi']);

        if ($request->hasFile('foto')) {
            try {
                $file = $request->file('foto');
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                
                $supabaseUrl = env('SUPABASE_URL');
                $supabaseKey = env('SUPABASE_KEY'); 
                $bucketName  = 'fasilitas'; 

                if (empty($supabaseUrl) || empty($supabaseKey)) {
                    return redirect()->back()->withInput()->withErrors(['foto' => 'Kredensial SUPABASE_URL atau SUPABASE_KEY belum terpasang di Vercel.']);
                }

                // Upload biner murni karena Runtime Vercel lo sekarang udah stabil
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $supabaseKey,
                    'Content-Type'  => $file->getMimeType(),
                ])->withBody(file_get_contents($file->getRealPath()), $file->getMimeType())
                  ->post($supabaseUrl . '/storage/v1/object/' . $bucketName . '/' . $fileName);

                if ($response->successful()) {
                    // Simpan URL Publik penuh ke database
                    $data['foto'] = $supabaseUrl . '/storage/v1/object/public/' . $bucketName . '/' . $fileName;
                } else {
                    $errResponse = $response->json();
                    $msg = $errResponse['message'] ?? 'Ditolak oleh Supabase Storage.';
                    return redirect()->back()->withInput()->withErrors(['foto' => 'Gagal Upload: ' . $msg]);
                }

            } catch (Exception $e) {
                return redirect()->back()->withInput()->withErrors(['foto' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
            }
        }

        // Eksekusi insert ke DB Supabase
        Fasilitas::create($data);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas baru berhasil ditambahkan abangkuh!');
    }

    // 4. Tampilkan Halaman Form Edit dengan Data Lama
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    // 5. Proses Simpan Perubahan Data (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:100',
            'deskripsi'      => 'required|string',
            'foto'           => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $data = $request->only(['nama_fasilitas', 'deskripsi']);

        if ($request->hasFile('foto')) {
            try {
                $supabaseUrl = env('SUPABASE_URL');
                $supabaseKey = env('SUPABASE_KEY');
                $bucketName  = 'fasilitas';

                if (!empty($supabaseUrl) && !empty($supabaseKey)) {
                    // Hapus foto lama dari Supabase Storage jika ada biar gak menuh-menuhin space
                    if ($fasilitas->foto && str_contains($fasilitas->foto, $supabaseUrl)) {
                        $oldFileName = basename($fasilitas->foto);
                        Http::withHeaders([
                            'Authorization' => 'Bearer ' . $supabaseKey,
                        ])->delete($supabaseUrl . '/storage/v1/object/' . $bucketName . '/' . $oldFileName);
                    }

                    // Upload foto baru
                    $file = $request->file('foto');
                    $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $supabaseKey,
                        'Content-Type'  => $file->getMimeType(),
                    ])->withBody(file_get_contents($file->getRealPath()), $file->getMimeType())
                      ->post($supabaseUrl . '/storage/v1/object/' . $bucketName . '/' . $fileName);

                    if ($response->successful()) {
                        $data['foto'] = $supabaseUrl . '/storage/v1/object/public/' . $bucketName . '/' . $fileName;
                    }
                }
            } catch (Exception $e) {
                // Safe catch
            }
        }

        $fasilitas->update($data);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui, abangkuh!');
    }

    // 6. Proses Hapus Data
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        
        $supabaseUrl = env('SUPABASE_URL');
        $supabaseKey = env('SUPABASE_KEY');
        $bucketName  = 'fasilitas';

        try {
            if (!empty($supabaseUrl) && !empty($supabaseKey)) {
                // Hapus file dari Supabase Storage saat data barisnya dihapus admin
                if ($fasilitas->foto && str_contains($fasilitas->foto, $supabaseUrl)) {
                    $oldFileName = basename($fasilitas->foto);
                    Http::withHeaders([
                        'Authorization' => 'Bearer ' . $supabaseKey,
                    ])->delete($supabaseUrl . '/storage/v1/object/' . $bucketName . '/' . $oldFileName);
                }
            }
        } catch (Exception $e) {
            // Tetap jalankan delete baris DB walau storage gagal terhapus
        }

        $fasilitas->delete();
        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil dihapus!');
    }
}