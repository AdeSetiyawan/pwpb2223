<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//memanggil si model
use App\models\tb_jualbarang;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = tb_jualbarang::where('id','=','1')->get() ;
        $a = tb_jualbarang::All();
        return view('home',['barang' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new tb_jualbarang;
        $barang->namaUkuran = $request->namaUkuran;
        $barang->lebarDada = $request->lebarDada;
        $barang->tinggiBadan = $request->tinggiBadan;
        $barang->keterangan= $request->keterangan;
        $barang->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = tb_jualbarang::find($id);

        $brg->delete();
        return redirect('/');

    }
}
