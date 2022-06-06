<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Merk;
use Illuminate\Support\Facades\DB;
class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil=Mobil::with('merk')->get();
        $paginate = Mobil::orderBy('seri', 'asc')->paginate(5);
        return view('MobilPage.mobil', ['mobil' => $mobil,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk=Merk::all();
        return view('MobilPage.create',['merk'=>$merk]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_mobil' => 'required',
            'varian' => 'required',
            'nomor_plat' => 'required',
            'nama_merk' => 'required',
        ]);

        if($request->file('image')){
            $image_name=$request->file('image')->store('images','public');
        }
        $mobil = new Mobil;
        $mobil->jenis_mobil = $request->get('jenis_mobil');
        $mobil->varian = $request->get('varian');
        $mobil->nomor_plat = $request->get('nomor_plat');
        $mobil->featured_image=$image_name;
    //   $mobil->save();
        // $merk=new Merk;
        // $merk=Merk::find($request->get('nama_merk'));
        $idmerk=$request->get('nama_merk');
        $merk=Merk::find($idmerk);
        $mobil->merk()->associate($merk);
        $mobil->save();
        return redirect()->route('mobil.index')
            ->with('success', 'Mobil Berhasil Ditambahkan');
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
        //
    }
}
