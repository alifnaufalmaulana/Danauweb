<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

=======
use Illuminate\Support\Facades\Session;
use App\Models\Berita;
use App\Models\Contact;
>>>>>>> ace934e02a33ae0b2bde16a1a1da26717f2090c2
use App\Models\Kegiatan;
use App\Models\Berita;
use App\Models\Komentar;
use App\Models\Promo;
use App\Models\Subscribe;
use Illuminate\Http\Request;

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

    public function contactview()
    {
        return view('user.contact');
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

        Session::flash('success', 'Komentar telah berhasil terkirim!');        
    }


    public function contactstore(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'descontact' => 'required',
        ]);


        Contact::create($validatedData);
        Session::flash('success', 'Pesan telah berhasil terkirim!');        
        return redirect()->route('user.contact');
    }
}

