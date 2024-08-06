<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use PDF; 

class PDFController extends Controller
{
    public function cetakPDF(){
        $viewrumah=DB::table('viewrumah')->select('*')->get();
        $data=[
            'viewrumah'=>$viewrumah,
            'tanggal'=>date('d/m/Y'),
            'judul'=>"Laporan Data Bantuan Bedah Rumah"
        ];

        $laporan =PDF::loadview('rumah.laporan',$data)->setPaper('f4','landscape');
        //01/10/2024
        $namaTGL=substr(date('d/m/Y'),0,2).substr(date('d/m/Y'),3,2).substr(date('d/m/Y'),6,4);
        $namaJAM=substr(date('h:i:s'),0,2).substr(date('h:i:s'),3,2).substr(date('h:i:s'),6,2);
        return $laporan->stream('Lap'.$namaTGL.$namaJAM.'.pdf');
    }
}
