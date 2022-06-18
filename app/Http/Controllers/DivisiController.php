<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisis = divisi::with('bem','departemen')->simplePaginate(9);
        return view('guest.divisi', ['divisis'=>$divisis, 'title'=>'Divisi']);
    }

    public function indexDepartemen($departemen_id)
    {
        $divisis = divisi::with('bem','departemen')->where('departemen_id',$departemen_id)->get();
        return view('guest.departemen-divisi', ['divisis'=>$divisis, 'title'=>'Divisi']);
    }
    
    public function indexAdmin()
    {
        $divisis = divisi::with('bem', 'departemen')->latest()->simplePaginate(10);
        return view('admin.manajemen.divisi.divisi', ['divisis' => $divisis]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = divisi::all();
        return view('admin.manajemen.divisi.tambah-divisi', compact('divisi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredivisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ketua'  => 'required',
            'tugas'  => 'required',
            'departemen_id' => 'required',
            'bem_id' => 'required'
        ]);


        divisi::create([
            'nama' => $request->nama,
            'ketua'  => $request->ketua,
            'tugas'  => $request->tugas,
            'departemen_id' => $request->departemen_id,
            'bem_id' => $request->bem_id
        ]);

        return redirect('/manajemen/divisi')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisi = divisi::find($id);
        return view('admin.manajemen.divisi.ubah-divisi', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedivisiRequest  $request
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           
        $divisi = divisi::find($id);
        $divisi->nama = $request->nama;
        $divisi->ketua = $request->ketua;
        $divisi->tugas  = $request->tugas;
        $divisi->departemen_id  = $request->departemen_id;
        $divisi->bem_id  = $request->bem_id;
        $divisi->save();


        return redirect('/manajemen/divisi')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $divisi = divisi::find($id);
        $divisi->delete();
        return redirect('/manajemen/divisi');
    }
}
