<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Pegawai;
use App\Models\User;
use App\Models\SewaMobil;
use App\Models\Pengembalian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = SewaMobil::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(5);
        return view('Pengembalian.pengembalian', ['paginate' => $paginate]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

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
        $sewa->pengembalian = 'pending';
        $sewa->save();  
        $pengembalian=new Pengembalian();
        $pengembalian->sewa_id=$sewa->id;
        $pengembalian->mobil_id=$sewa->mobil_id;
        $pengembalian->user_id=$sewa->user_id;
        $pengembalian->pegawai_id=$sewa->pegawai_id;
        $pengembalian->batas_kembali=$sewa->tanggal_kembali;
        $pengembalian->save();
        return redirect()->route('pengembalian.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
