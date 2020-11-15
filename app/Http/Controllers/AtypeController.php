<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeMobil;
use App\MerkMobil;
use App\Promo;
use DB;
use Alert;

class AtypeController extends Controller
{
  public function type(){
   $data_type = DB::table('type-mobil')
   ->join('merk-mobil', 'merk-mobil.id' , '=', 'type-mobil.id_mobil')
   ->select('merk-mobil.id', 'merk-mobil.nama_mobil','type-mobil.*')
   ->get();
   return view ('admin.type-mobil',compact('data_type'));
 }

 public function add_type($id){
   $data_penjualan = MerkMobil::find($id);
   return view ('admin.input-type',compact('data_penjualan'));
 }

 public function tambah_type(Request $request, $id){

   $data_penjualan = MerkMobil::where('id',$id)->first();

      	// Simpan Type
   $data_type = new TypeMobil;
   $data_type->id_mobil = $data_penjualan->id;
   $data_type->type = $request->get('type');
   $data_type->harga_type = $request->get('harga_type');
   $data_type->save();
   Alert()->success('data berhasil', 'tersimpan');
   return redirect ('/admin-honda/penjualan');
 }

 public function edit_type($id){
  $data_type = TypeMobil::find($id);
  $data_penjualan = MerkMobil::where('id',$data_type->id_mobil)->first();
  return view ('admin.edit-type',compact('data_type','data_penjualan'));
}

public function update_type(Request $request, $id){
  $data_type = TypeMobil::find($id);
  $data_penjualan = MerkMobil::where('id',$data_type->id_mobil)->first();
  $data_type->id_mobil = $data_penjualan->id;
  $data_type->type = $request->get('type');
  $data_type->harga_type = $request->get('harga_type'); 
  $data_type->save();
  Alert()->success('data berhasil', 'Update');
  return redirect('/admin-honda/pricelist');
}

public function hapus_type($id){
  $data_type = TypeMobil::find($id);
  $data_type->delete();
  return redirect ('/admin-honda/pricelist');
}

    //tambah Promo
public function add_promo($id){
  $data_penjualan = MerkMobil::find($id);
  return view ('admin.input-promo',compact('data_penjualan'));
}

public function tambah_promo(Request $request, $id){
  $data_penjualan = MerkMobil::where('id',$id)->first();
    //simpan Prmo
  $data_promo = new Promo;
  $data_promo->id_promo_mobil = $data_penjualan->id;
  $data_promo->hadiah = $request->get('hadiah');
  $data_promo->save();
  Alert()->success('data berhasil', 'tersimpan');
  return redirect ('/admin-honda/penjualan');
}

public function read_promo(){
  $data_promo = DB::table('promo-mobil')
  ->join('merk-mobil', 'merk-mobil.id' , '=', 'promo-mobil.id_promo_mobil')
  ->select('merk-mobil.id','merk-mobil.dp','merk-mobil.angsuran', 'merk-mobil.nama_mobil','promo-mobil.*')
  ->get();
  return view ('admin.promo-mobil',compact('data_promo'));
}

public function edit_promo($id){
  $data_promo = Promo::find($id);
  $data_penjualan = MerkMobil::where('id',$data_promo->id_promo_mobil)->first();
  return view ('admin.edit-promo',compact('data_promo','data_penjualan'));
}

public function update_promo(Request $request, $id){
  $data_promo = Promo::find($id);
  $data_penjualan = MerkMobil::where('id',$data_promo->id_promo_mobil)->first();
  $data_promo->id_promo_mobil = $data_penjualan->id;
  $data_promo->hadiah = $request->get('hadiah');
  $data_promo->save();
  Alert()->success('data berhasil', 'Update');
  return redirect ('admin-honda/promo');
}

public function hapus_promo($id){
  $data_promo = Promo::find($id);
  $data_promo->delete();
  return redirect ('/admin-honda/promo');
}

}
