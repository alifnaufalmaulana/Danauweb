<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Komentar;
use App\Models\Promo;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\Contacts;

class UserController extends Controller
{

    //Halaman FAQ View
    public function userview()
    {
        $promos = Promo::all();
        $kegiatans = Kegiatan::all();
        $beritas = Berita::take(3)->get();
        return view('user.index', compact('promos','beritas','kegiatans'));
    }

    //Halaman FAQ View
    public function aboutview()
    {
        return view('user.about');
    }

        //Halaman FAQ View
    public function contactview()
    {
        return view('user.contact');
    }

    public function kegiatan()
    {
        return view('user.detailkegiatan');
    }

    //Halaman ABOUT View
    public function faqview()
    {
        return view('user.faq');
    }

    public function teamview()
    {
        return view('user.team');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);

        Subscribe::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'Terima Kasih, Tunggu Informasi Selanjutnya');
    }

    public function store(Request $request)
    {
        $request->validate([
            'berita_id' => 'required|exists:beritas,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'teks' => 'required|string',
        ]);

        Komentar::create([
            'berita_id' => $request->berita_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'teks' => $request->teks,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }


    public function contactstore(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:beritas,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contacts::create([
            'id' => $request->id,
            'name' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }
}

