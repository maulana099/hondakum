<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MerkMobil;
use App\TypeMobil;
use App\Promo;
use App\PengunjungPromo;

class PromoController extends Controller
{	

	public function promo(){
		$data_penjualan = MerkMobil::latest()->paginate(12);
        return view ('pengguna.promo',compact('data_penjualan'))->with('i',(request()->input('page',1) -1) * 10);
	}

	public function detail_promo($id){
		$data_promo = MerkMobil::find($id);
		$data_promo_mobil = Promo::where('id_promo_mobil',$data_promo->id)->get();
		return view ('pengguna.detail-promo',compact('data_promo','data_promo_mobil'));
	}

	public function addpromo(Request $request){
		$data_promo = new PengunjungPromo();
		$data_promo->kabupaten = $request->get('kabupaten');
		$data_promo->nama = $request->get('nama');
		$data_promo->no_hp = $request->get('no_hp');
		$data_promo->save();
		return redirect('/dapatkan-promo/terbaik/&/cicilan/terendah/read.honda/mobil/pilihanmu');
	}
	
}
