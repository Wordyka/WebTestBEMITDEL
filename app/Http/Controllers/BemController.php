<?php

namespace App\Http\Controllers;

use App\Models\bem;
use Illuminate\Http\Request;

class BemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bems = bem::with('departemen', 'divisi')->latest()->get();
        return view('guest.beranda', ['bems' => $bems, 'title' => 'Beranda']);
    }

    public function indexAdmin()
    {
        $bems = bem::with('departemen', 'divisi')->latest()->simplePaginate(5);
        return view('admin.manajemen.bem.bem', ['bems' => $bems]);
    }

    public function beranda()
    {
        $bems = bem::with('departemen', 'divisi')->latest()->simplePaginate(5);
        return view('admin.beranda', ['bems' => $bems]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bem = bem::all();
        return view('admin.manajemen.bem.tambah-bem', compact('bem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ketua'  => 'required',
            'wketua'  => 'required',
            'sekretaris1'  => 'required',
            'sekretaris2'  => 'required',
            'bendahara1'  => 'required',
            'bendahara2'  => 'required',
            'visi'  => 'required',
            'misi'  => 'required',
            'logo-file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $logo = $request->file('logo-file');
        $namalogo = time() . '.' . $logo->extension();
        $logo->move(public_path('logo'), $namalogo);

        bem::create([
            'nama' => $request->nama,
            'ketua'  => $request->ketua,
            'wketua'  => $request->wketua,
            'sekretaris1'  => $request->sekretaris1,
            'sekretaris2'  => $request->sekretaris2,
            'bendahara1'  => $request->bendahara1,
            'bendahara2'  => $request->bendahara2,
            'visi'  => $request->visi,
            'misi'  => $request->misi,
            'logo' => $namalogo
        ]);

        return redirect('/manajemen/bem')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bem  $bem
     * @return \Illuminate\Http\Response
     */
    public function show(bem $bem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bem  $bem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bem = bem::find($id);
        return view('admin.manajemen.bem.ubah-bem', compact('bem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebemRequest  $request
     * @param  \App\Models\bem  $bem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    
        $bem = bem::find($id);
        $bem->nama = $request->nama;
        $bem->ketua = $request->ketua;
        $bem->wketua = $request->wketua;
        $bem->sekretaris1  = $request->sekretaris1;
        $bem->sekretaris2  = $request->sekretaris2;
        $bem->bendahara1  = $request->bendahara1;
        $bem->bendahara2  = $request->bendahara2;
        $bem->visi  = $request->visi;
        $bem->misi  = $request->misi;

        if ($request->logofile != NULL) {
            $logo = $request->file('logofile');
            $namalogo = time() . '.' . $logo->extension();
            $logo->move(public_path('logo'), $namalogo);

            $bem->logo  = $namalogo;
        } else {
            $bem->logo  = $request->logo;
        }

        $bem->save();


        return redirect('/manajemen/bem')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bem  $bem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bem = bem::find($id);
        $bem->delete();
        return redirect('/manajemen/bem');
    }
}
