<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::paginate(10);

        return view ('buku.index',compact('buku'));
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();

        return view('buku.create',compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'judul' => 'required',
        'noisbn' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun' => 'required',
        'stok' => 'required',
        'harga_pokok' => 'required',
        'harga_jual' => 'required',
        'ppn' => 'required',
        'diskon' => 'required',

    ]);
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->harga_pokok;
        $buku->harga_jual = $request->harga_jual;
        $buku->ppn = $request->ppn;
        $buku->diskon = $request->diskon;
        
        $buku->save();
        return redirect('/buku');
    }


    

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);

        return view('buku.edit',compact('buku'));
    }


       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
        'judul' => 'required',
        'noisbn' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun' => 'required',
        'stok' => 'required',
        'harga_pokok' => 'required',
        'harga_jual' => 'required',
        'ppn' => 'required',
        'diskon' => 'required',

    ]);
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->harga_pokok;
        $buku->harga_jual = $request->harga_jual;
        $buku->ppn = $request->ppn;
        $buku->diskon = $request->diskon;
        
        $buku->save();
        return redirect('/buku');
    }

    public function show($id)
    {
        $buku = Buku::find($id);

        return view('buku.detail',compact('buku'));
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
	{
	    $delete = Buku::find($id);
        $delete->delete();
        return redirect('/buku');
    }
}
