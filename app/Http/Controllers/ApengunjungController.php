<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengunjungPromo;
use App\Pengunjung;

class ApengunjungController extends Controller
{
    public function pengunjung_promo(){
    	$pengunjung_promo =  PengunjungPromo::latest()->paginate(10);
    	return view ('admin.pengunjung-promo',compact('pengunjung_promo'))->with('i',(request()->input('page',1) -1) * 10);;
    }

    public function hapus_promo($id){
    	$pengunjung_promo = PengunjungPromo::find($id);
    	$pengunjung_promo->delete();
    	return redirect ('/admin-honda/pengunjung/promo');
    }


    //pengunjung web

    public function pengunjung(){
        $data_pengunjung = Pengunjung::latest()->paginate(10);
        return view ('admin.pengunjung',compact('data_pengunjung'))->with('i',(request()->input('page',1) -1) * 10);
    }
    
    public function hapus_pengunjung($id){
    	$data_pengunjung = Pengunjung::find($id);
    	$data_pengunjung->delete();
    	return redirect ('/admin-honda/pengunjung');
    }
}
