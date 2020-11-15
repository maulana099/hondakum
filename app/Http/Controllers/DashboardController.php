<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Dokumentasi;
use App\Pengunjung;
use App\MerkMobil;
use App\TypeMobil;
use App\Promo;
use App\Photos;
use App\Populer;

class DashboardController extends Controller
{
  public function index(){
   $data_dokumentasi = Dokumentasi::latest()->paginate(10);
   $data_penjualan = MerkMobil::latest()->paginate(3);
   $data_sidebar = Photos::first();
   $data_populer = Populer::latest()->paginate(3);
   return view ('pengguna.index',compact('data_dokumentasi','data_penjualan','data_sidebar','data_populer'));
 }

 public function details($id){
  $data_penjualan = MerkMobil::find($id);
  $data_type = TypeMobil::where('id_mobil',$data_penjualan->id)->get();
  return view ('pengguna.detail',compact('data_penjualan','data_type'));
}

public function pricelist(){
  $data_pricelist = DB::table('type-mobil')
  ->join('merk-mobil', 'merk-mobil.id' , '=', 'type-mobil.id_mobil')
  ->select('merk-mobil.id', 'merk-mobil.nama_mobil','type-mobil.*')
  ->get();
  return view ('pengguna.pricelist',compact('data_pricelist'));
}

public function tambah_pengunjung(Request $request){
  $this->validate($request, [
    'nama' => 'required',
    'kabupaten' => 'required',
    'pekerjaan' => 'required',
    'no_hp' => 'required',
    'rencana' => 'required',
    'message' => 'required',
  ]);

  $data_pengunjung = new Pengunjung();
  $data_pengunjung->nama = $request->get('nama');
  $data_pengunjung->kabupaten = $request->get('kabupaten');
  $data_pengunjung->pekerjaan = $request->get('pekerjaan');
  $data_pengunjung->no_hp = $request->get('no_hp');
  $data_pengunjung->rencana = $request->get('rencana');
  $data_pengunjung->message = $request->get('message');
  $data_pengunjung->save();
  Alert()->success('Pesan Terkirim', 'Message');
  return redirect('/');
}
}




