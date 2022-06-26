<?php

namespace App\Http\Controllers;

use App\Models\SewaMobil;
use PDF;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $paginate = SewaMobil::all();
        $pdf = PDF::loadview('SewaPage.cetak', compact('paginate'));
        $pdf->setPaper('F4', 'landscape');
        return $pdf->stream();
    }
}
