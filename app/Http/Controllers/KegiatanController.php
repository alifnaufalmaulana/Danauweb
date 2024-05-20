<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{

    // public function Kegiatan()
    // {
    //     $data = Kegiatan::all();
    //     return view('user.index', compact('data'));
    // }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.kegiatan.view_kegiatan', compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatan.add_kegiatan');
    }

    /**
     * Store a newly created resource in storage.

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Kegiatan();
        $data->judulkegiatan = $request->judulkegiatan;
        $data->tanggalkegiatan = $request->tanggalkegiatan;
        if ($request->hasFile('photokegiatan')) {
            $photo_kegiatan = $request->file('photokegiatan')->store('photokegiatan');
            $data->photokegiatan = $photo_kegiatan;
        }
        $data->save();
    }


   


    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Kegiatan::Find($id);
        return view('admin.kegiatan.edit_kegiatan', compact('editData'));
    }

    /**
     * Update the specified resource in storage.

     *  @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $data = Kegiatan::find($id);
        $data->judulkegiatan = $request->judulkegiatan;
        $data->tanggalkegiatan = $request->tanggalkegiatan;
        if ($request->hasFile('photokegiatan')) {
            $photo_kegiatan = $request->file('photokegiatan')->store('photokegiatan');
            $data->photokegiatan = $photo_kegiatan;
        }
        $data->update();
        return redirect()->route('kegiatan.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function destroy(string $id)
    {
        $data = Kegiatan::find($id);
        if ($data->photokegiatan != null || $data->photokegiatan = '') {
            Storage::delete($data->photokegiatan);
        }
        $data->delete();
    }

    public function KegiatanShow(string $id)
    {
        $kegiatan = Kegiatan::find($id);        
        return view('user.detailkegiatan', compact('kegiatan'));
    }


   
}
