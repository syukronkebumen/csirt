<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        // $candidates = Candidate::with('users')->paginate(5);
        // $jumlah = User::where('status','SUDAH')->count();
        // $candidates = Candidate::get();
        return view('berita.index');
    }

    public function show(Request $request, $slug)
    {
        $detail = Artikel::leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.kategori_id')
                    ->select(
                        'kategori_artikel.nama as nama_kategori',
                        'artikel.judul',
                        'artikel.slug',
                        'artikel.deskripsi',
                        'artikel.gambar'
                    )
                    ->where('slug', $slug)
                    ->first();

        return view('berita.detail', compact('detail'));
    }
}
