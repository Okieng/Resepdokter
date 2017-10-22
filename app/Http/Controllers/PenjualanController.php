<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Buku;
use App\Kasir;

class PenjualanController extends Controller
{
	 public function index()
    {
        $penjualan = Penjualan::paginate(10);

        return view ('penjualan.index',compact('penjualan'));
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = Penjualan::all();
		$buku = Buku::all();
        $kasir = Kasir::all();

        return view('penjualan.create',compact(['penjualan'],['buku'],['kasir']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
        $cari = $request->get('search');
        $penjualan = Penjualan::where('jumlah','LIKE','%'.$cari.'%')->paginate(10);
        return view('penjualan.index',compact('penjualan'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'id_buku' => 'required',
        'id_kasir' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',
    ]);
        $penjualan = new Penjualan;
        $penjualan->id_buku = $request->id_buku;
        $penjualan->id_kasir = $request->id_kasir;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total = $request->total;
        $penjualan->tanggal = $request->tanggal;
        $penjualan->save();
        return redirect('/penjualan');
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
    {
        $penjualan = Penjualan::find($id);
		$buku = Buku::all();
        $kasir = Kasir::all();

        return view('penjualan.edit',compact(['penjualan'],['buku'],['kasir']));
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
        'id_buku' => 'required',
        'id_kasir' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',

    ]);
        $penjualan = Penjualan::find($id);
        $penjualan->id_buku = $request->id_buku;
        $penjualan->id_kasir = $request->id_kasir;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total = $request->total;
        $penjualan->tanggal = $request->tanggal;
        $penjualan->save();
        return redirect('/penjualan');
    }

    public function show($id)
    {
        $penjualan = Penjualan::find($id);

        return view('penjualan.detail',compact('penjualan'));
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
	{
	    $delete = Penjualan::find($id);
        $delete->delete();
        return redirect('/penjualan');
    }
}
