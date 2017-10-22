<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasok;
use App\buku;
use App\distributor;

class PasokController extends Controller
{
    public function index()
    {
        $pasok = Pasok::paginate(10);
		$buku = Buku::all();
        $distributor = Distributor::all();

        return view('pasok.index',compact(['pasok'],['buku'],['distributor']));
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasok = Pasok::all();
		$buku = Buku::all();
        $distributor = Distributor::all();

        return view('pasok.create',compact(['pasok'],['buku'],['distributor']));
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
        'id_distributor' => 'required',
        'id_buku' => 'required',	
        'tanggal' => 'required',
        'jumlah' => 'required',
    ]);
        $pasok = new Pasok;
        $pasok->tanggal = $request->tanggal;
        $pasok->jumlah = $request->jumlah;
        $pasok->id_distributor = $request->id_distributor;
        $pasok->id_buku = $request->id_buku;
        $pasok->save();
        return redirect('/pasok');
    }


    

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasok = Pasok::find($id);
		$buku = Buku::all();
        $distributor = Distributor::all();

        return view('pasok.edit',compact(['pasok'],['buku'],['distributor']));
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
        'id_distributor' => 'required',
        'id_buku' => 'required',	
        'tanggal' => 'required',
        'jumlah' => 'required',

    ]);
        $pasok = Pasok::find($id);
        $pasok->tanggal = $request->tanggal;
        $pasok->jumlah = $request->jumlah;
        $pasok->id_distributor = $request->id_distributor;
        $pasok->id_buku = $request->id_buku;
        $pasok->save();
        return redirect('/pasok');
    }

    public function show($id)
    {
        $pasok = Pasok::find($id);
		$buku = Buku::all();
        $distributor = Distributor::all();

        return view('pasok.detail',compact(['pasok'],['buku'],['distributor']));
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request){
        $cari = $request->get('search');
        $pasok = Pasok::where('tanggal','LIKE','%'.$cari.'%')->paginate(10);
        return view('pasok.index',compact('pasok'));
    }
    public function destroy($id)
	{
	    $delete = Pasok::find($id);
        $delete->delete();
        return redirect('/pasok');
    }
}
