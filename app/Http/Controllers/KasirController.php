<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kasir;

class KasirController extends Controller
{
    



 public function index()
    {
        $kasir = Kasir::paginate(10);

        return view ('kasir.index',compact('kasir'));
    }

         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasir = Kasir::all();

        return view('kasir.create',compact('kasir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $kasir = Kasir::where('nama','LIKE','%'.$cari.'%')->paginate(10);
        return view('kasir.index',compact('kasir'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'status' => 'required',
        'username' => 'required',
        'password' => 'required',
        'akses' => 'required',
    ]);
        $kasir = new Kasir;
        $kasir->nama = $request->nama;
        $kasir->alamat = $request->alamat;
        $kasir->telepon = $request->telepon;
        $kasir->status = $request->status;
        $kasir->username = $request->username;
        $kasir->password = $request->password;
        $kasir->akses = $request->akses;
        $kasir->save();
        return redirect('/kasir');
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
        $kasir = Kasir::find($id);

        return view('kasir.edit',compact('kasir'));
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
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'status' => 'required',
        'username' => 'required',
        'akses' => 'required',

    ]);
        $kasir = Kasir::find($id);
        $kasir->nama = $request->nama;
        $kasir->alamat = $request->alamat;
        $kasir->telepon = $request->telepon;
        $kasir->status = $request->status;
        $kasir->username = $request->username;
        $kasir->password = $request->password;
        $kasir->akses = $request->akses;
        $kasir->save();
        return redirect('/kasir');
    }

    public function show($id)
    {
        $kasir = Kasir::find($id);

        return view('kasir.detail',compact('kasir'));
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
	{
	    $delete = Kasir::find($id);
        $delete->delete();
        return redirect('/kasir');
    }
}    