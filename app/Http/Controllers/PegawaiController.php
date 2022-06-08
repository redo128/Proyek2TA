<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::orderBy('id_pegawai', 'asc')->paginate(5);
        return view('PegawaiPage.pegawai', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PegawaiPage.create');
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
            'id' => 'required',
            'Foto' => 'required',
            'Nama' => 'required',
            'JenisKelamin' => 'required',
            'Jabatan' => 'required',
            'Alamat' => 'required',
            'Telepon' => 'required',
        ]);

        $pegawai = new Pegawai;
        $pegawai->id_pegawai = $request->get('id');
        $pegawai->foto_pegawai = $request->get('Foto');
        $pegawai->nama_pegawai = $request->get('Nama');
        $pegawai->jenis_kelamin = $request->get('JenisKelamin');
        $pegawai->jabatan = $request->get('Jabatan');
        $pegawai->alamat = $request->get('Alamat');
        $pegawai->telepon = $request->get('Telepon');
        $pegawai->save();
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);
        return view('PegawaiPage.detail', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pegawai)
    {
        $pegawai = DB::table('pegawai')->where('id_pegawai', $id_pegawai)->first();
        return view('PegawaiPage.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pegawai)
    {
        $request->validate([
            'id' => 'required',
            'Foto' => 'required',
            'Nama' => 'required',
            'JenisKelamin' => 'required',
            'Jabatan' => 'required',
            'Alamat' => 'required',
            'Telepon' => 'required',
        ]);

        $pegawai = Pegawai::find($id_pegawai);
        $pegawai->id_pegawai = $request->get('id');
        $pegawai->foto_pegawai = $request->get('Foto');
        $pegawai->nama_pegawai = $request->get('Nama');
        $pegawai->jenis_kelamin = $request->get('JenisKelamin');
        $pegawai->jabatan = $request->get('Jabatan');
        $pegawai->alamat = $request->get('Alamat');
        $pegawai->telepon = $request->get('Telepon');
        $pegawai->save();
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pegawai)
    {
        Pegawai::find($id_pegawai)->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai Berhasil Dihapus');
    }
}
