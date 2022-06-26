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
        $mobil = Mobil::with('merk')->get();
        $paginate = Mobil::orderBy('id', 'asc')->paginate(5);
        return view('MobilPage.mobil', ['mobil' => $mobil, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        return view('MobilPage.create', ['merk' => $merk]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_mobil' => 'required',
            'varian' => 'required',
            'nomor_plat' => 'required',
            'nama_merk' => 'required',
            'tarif' => 'required',
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $mobil = new Mobil;
        $mobil->jenis_mobil = $request->get('jenis_mobil');
        $mobil->varian = $request->get('varian');
        $mobil->nomor_plat = $request->get('nomor_plat');
        $mobil->tarif = $request->get('tarif');
        $mobil->featured_image = $image_name;
        $idmerk = $request->get('nama_merk');
        $merk = Merk::find($idmerk);
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
        $mobil = DB::table('mobil')->where('id', $id)->first();;
        return view('MobilPage.detail', ['mobil' => $mobil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::with('merk')->where('id', $id)->first();
        $merk = Merk::all(); //mendapatkan data dari table kelas
        return view('MobilPage.edit', compact('mobil', 'merk'));
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
            'jenis_mobil' => 'required',
            'varian' => 'required',
            'nomor_plat' => 'required',
            'nama_merk' => 'required',
            'tarif' => 'required',
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $mobil = Mobil::with('merk')->where('id', $id)->first();
        $mobil->jenis_mobil = $request->get('jenis_mobil');
        $mobil->varian = $request->get('varian');
        $mobil->nomor_plat = $request->get('nomor_plat');
        $mobil->tarif = $request->get('tarif');
        $mobil->featured_image = $image_name;
        $merk = Merk::find($request->get('nama_merk'));
        $mobil->merk()->associate($merk);
        $mobil->save();
        return redirect()->route('mobil.index')
            ->with('success', 'Mobil Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($seri)
    {
        $mobil = DB::table('mobil')->where('id', $seri)->delete();;
        return redirect()->route('mobil.index')
            ->with('success', 'Data Mobil Berhasil Dihapus');
    }
}
