<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Merk;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::orderBy('id', 'asc')->paginate(5);
        return view('Merkpage.merk', ['merk' => $merk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MerkPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
        ]);

        $merk = new Merk;
        $merk->nama_merk = $request->get('Nama');
        $merk->save();
        return redirect()->route('merk.index')
            ->with('success', 'Merk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merk = Merk::find($id);
        return view('MerkPage.detail', ['merk' => $merk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merk = DB::table('merk')->where('id', $id)->first();
        return view('MerkPage.edit', compact('merk'));
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
        $request->validate([
            'Nama' => 'required',
        ]);

        $merk = Merk::find($id);
        $merk->nama_merk = $request->get('Nama');
        $merk->save();
        return redirect()->route('merk.index')
            ->with('success', 'Merk Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Merk::find($id)->delete();
        return redirect()->route('merk.index')
            ->with('success', 'Merk Berhasil Dihapus');
    }
}
