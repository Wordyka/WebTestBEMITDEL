<?php

namespace App\Http\Controllers;

use App\Models\departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemens = departemen::with('bem','divisi')->get();
        return view('guest.departemen', ['departemens'=>$departemens, 'title'=>'Departemen']);
    }

    public function indexAdmin()
    {
        $departemens = departemen::with('bem', 'divisi')->latest()->simplePaginate(5);
        return view('admin.manajemen.departemen.departemen', ['departemens' => $departemens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemen = departemen::all();
        return view('admin.manajemen.departemen.tambah-departemen', compact('departemen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartemenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ketua'  => 'required',
            'wketua'  => 'required',
            'sekretaris'  => 'required',
            'bendahara'  => 'required',
            'tugas'  => 'required',
            'logo-file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'bem_id' => 'required'
        ]);

        $logo = $request->file('logo-file');
        $namalogo = time() . '.' . $logo->extension();
        $logo->move(public_path('logo'), $namalogo);

        departemen::create([
            'nama' => $request->nama,
            'ketua'  => $request->ketua,
            'wketua'  => $request->wketua,
            'sekretaris'  => $request->sekretaris,
            'bendahara'  => $request->bendahara,
            'tugas'  => $request->tugas,
            'logo' => $namalogo,
            'bem_id' => $request->bem_id
        ]);

        return redirect('/manajemen/departemen')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function show(Departemen $departemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departemen = departemen::find($id);
        return view('admin.manajemen.departemen.ubah-departemen', compact('departemen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartemenRequest  $request
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    
        $departemen = departemen::find($id);
        $departemen->nama = $request->nama;
        $departemen->ketua = $request->ketua;
        $departemen->wketua = $request->wketua;
        $departemen->sekretaris  = $request->sekretaris;
        $departemen->bendahara  = $request->bendahara;
        $departemen->tugas  = $request->tugas;
        $departemen->bem_id  = $request->bem_id;

        if ($request->logofile != NULL) {
            $logo = $request->file('logofile');
            $namalogo = time() . '.' . $logo->extension();
            $logo->move(public_path('logo'), $namalogo);

            $departemen->logo  = $namalogo;
        } else {
            $departemen->logo  = $request->logo;
        }

        $departemen->save();


        return redirect('/manajemen/departemen')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departemen = departemen::find($id);
        $departemen->delete();
        return redirect('/manajemen/departemen');
    }
}
