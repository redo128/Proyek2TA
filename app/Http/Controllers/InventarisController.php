<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\Barang;
use App\Models\Label;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventaris::with('label','barang')->get();
        $paginate = Inventaris::orderBy('id', 'asc')->paginate(5);
        return view('InventarisPage.inventaris', ['paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $label = Label::all();
        $barang = Barang::all();
        return view('InventarisPage.create', ['label' => $label,'barang'=>$barang]);
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
        $request->validate([
            'nama_barang' => 'required',
            'nama_label' => 'required',

        ]);
        $idlabel = $request->get('nama_label');
        $idbarang = $request->get('nama_barang');
        if(DB::table('barang')->where('id',$idbarang)->where('label_id',$idlabel)->exists()){
            $inventaris = new Inventaris;
            $label=Label::find($idlabel);
            $barang=Barang::find($idbarang);
            $inventaris->label()->associate($label);
            $inventaris->barang()->associate($barang);
            $inventaris->stock=$request->get('stock');
            $barang = Barang::with('label')->where('id', $idbarang)->where('label_id',$idlabel)->first();
            $barang->stock =$barang->stock + $request->get('stock');
            $inventaris->save();
            $barang->save();
            return redirect()->route('inventaris.index')
            ->with('success', 'Barang Berhasil Ditambahkan');

        }else{
            return redirect()->route('inventaris.index')
            ->with('error', 'Barang tidak ada');
        }
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
        $inventaris = DB::table('inventaris')->where('id', $id)->delete();
        return redirect()->route('inventaris.index')
            ->with('success', 'Data Barang Berhasil Dihapus');
    }
}