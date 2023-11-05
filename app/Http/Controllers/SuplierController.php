<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = Suplier::all();
        return view('suplier.index', compact(['suplier']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Suplier::create([
            'nama' => $request->nama,
            $request->except(['_token']),
        ]);
        return redirect('/suplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suplier = Suplier::find($id);
        return view('suplier.edit',compact(['suplier']));
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
        $suplier = Suplier::find($id);
        $suplier->update([
            'nama' => $request->nama,
            $request->except(['_token']),
        ]);
        return redirect('/suplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();
        return redirect('/suplier');
    }
}
