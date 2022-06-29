<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Pegawai;
use App\Models\User;
use App\Models\SewaMobil;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = SewaMobil::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(5);
        return view('SewaPage.sewa', ['paginate' => $paginate]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = Mobil::all();
        $pegawai = Pegawai::where('jabatan', 'Customer Service')->get();
        return view('SewaPage.create', compact('mobil', 'pegawai'));
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
            'NamaPegawai' => 'required',
            'Alamat' => 'required',
            'Varian' => 'required',
            'TanggalSewa' => 'required',
            'TanggalKembali' => 'required',
        ]);
        $sewa = new SewaMobil();
        $sewa->user()->associate(Auth::user());
        $pegawai = Pegawai::find($request->get('NamaPegawai'));
        $sewa->pegawai()->associate($pegawai);
        $mobil = Mobil::find($request->get('Varian'));
        $sewa->mobil()->associate($mobil);
        $sewa->alamat = $request->get('Alamat');
        $sewa->tanggal_sewa = Carbon::parse($request->get('TanggalSewa'));
        $sewa->tanggal_kembali = Carbon::parse($request->get('TanggalKembali'));
        $sewa->tarif = $mobil->tarif * $sewa->tanggal_kembali->diffInDays($sewa->tanggal_sewa);
        // set status
        $sewa->status = 'Paid Off';
        $sewa->save();
        return redirect()->route('sewa.index')
            ->with('success', 'Data Sewa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sewa = Pegawai::find($id);
        return view('SewaPage.detail', ['sewa' => $sewa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sewa = SewaMobil::find($id);
        $mobil = Mobil::all();
        $pegawai = Pegawai::where('jabatan', 'Customer Service')->get();
        return view('SewaPage.edit', compact('sewa', 'mobil', 'pegawai'));
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
            'NamaPegawai' => 'required',
            'Alamat' => 'required',
            'Varian' => 'required',
            'TanggalSewa' => 'required',
            'TanggalKembali' => 'required',
        ]);
        $sewa = SewaMobil::find($id);
        $sewa->user()->associate(Auth::user());
        $pegawai = Pegawai::find($request->get('NamaPegawai'));
        $sewa->pegawai()->associate($pegawai);
        $mobil = Mobil::find($request->get('Varian'));
        $sewa->mobil()->associate($mobil);
        $sewa->alamat = $request->get('Alamat');
        $sewa->tanggal_sewa = Carbon::parse($request->get('TanggalSewa'));
        $sewa->tanggal_kembali = Carbon::parse($request->get('TanggalKembali'));
        $sewa->tarif = $mobil->tarif * $sewa->tanggal_kembali->diffInDays($sewa->tanggal_sewa);
        $sewa->save();
        return redirect()->route('sewa.index')
            ->with('success', 'Data Sewa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SewaMobil::find($id)->delete();
        return redirect()->route('sewa.index')
            ->with('success', 'Data Sewa Berhasil Dihapus');
    }

    public function payment($id)
    {
        $sewa = SewaMobil::find($id);
        return view('SewaPage.bayar', compact('sewa'));
    }

    public function pay(Request $request, $id)
    {
        $request->validate([
            'nominal' => 'required|integer',
        ]);

        $sewa = SewaMobil::find($id);
        if (((int)$request->get('nominal')) >= $sewa->tarif) {
            $sewa->status = 'Paid';
            $sewa->save();

            return redirect()->route('sewa.index')
                ->with('success', 'Pembayaran Berhasil Diterima');
        }

        return Redirect::back()->with('error', 'Nominal yang anda masukkan kurang :)');
    }
}
