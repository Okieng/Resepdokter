<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\distributor;

class DistributorController extends Controller
{
     public function index()
    {
        $distributor = Distributor::paginate(10);

        return view ('distributor.index',compact('distributor'));
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distributor = Distributor::all();

        return view('distributor.create',compact('distributor'));
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
        'nama_distributor' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
    ]);
        $distributor = new Distributor;
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;
        $distributor->save();
        return redirect('/distributor');
    }


    

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

       public function search(Request $request){
        $cari = $request->get('search');
        $distributor = Distributor::where('nama_distributor','LIKE','%'.$cari.'%')->paginate(10);
        return view('distributor.index',compact('distributor'));
    }

    public function edit($id)
    {
        $distributor = Distributor::find($id);

        return view('distributor.edit',compact('distributor'));
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
        'nama_distributor' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',

    ]);
        $distributor = Distributor::find($id);
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;
        $distributor->save();
        return redirect('/distributor');
    }

    public function show($id)
    {
        $distributor = Distributor::find($id);

        return view('distributor.detail',compact('distributor'));
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
	{
	    $delete = Distributor::find($id);
        $delete->delete();
        return redirect('/distributor');
    }
}
