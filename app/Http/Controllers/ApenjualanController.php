<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MerkMobil;
use Alert;

class ApenjualanController extends Controller
{
	public function mobil(){
		$data_penjualan = MerkMobil::latest()->paginate(6);
		return view ('admin.merk-mobil',compact('data_penjualan'))->with('i',(request()->input('page',1) -1) * 6);
	}

	public function tambah_mobil(){
		return view('admin.input-mobil');
	}
	
	public function addmobil(Request $request){
		$request->validate([
			'nama_mobil' => 'required',
			'harga' => 'required',
			'gambar' => 'required|file|mimes:png,jpeg,jpg|max:3048',
		]);

		$gambar = $request->file('gambar');
		$new_gambar = $gambar->getClientOriginalName();
		$gambar->move(public_path('gambar/'),$new_gambar);

		$data_penjualan = array(
			'nama_mobil' => $request->nama_mobil,
			'harga' => $request->harga,
			'dp' => $request->dp,
			'angsuran' => $request->angsuran,
			'gambar' => $new_gambar
		);

		MerkMobil::create($data_penjualan);
		Alert()->success('data berhasil', 'tersimpan');
		return redirect ('/admin-honda/penjualan');
	}

	public function edit_mobil ($id){
		$data_penjualan = MerkMobil::find($id);
		return view ('admin.edit-mobil',compact('data_penjualan'));
	}

	public function update_mobil (Request $request, $id){
		$new_gambar = $request->hidden_gambar;
		$gambar = $request->file('gambar');
		if ($gambar !='') 
		{
			$request->validate([
				'nama_mobil' => 'required',
				'harga' => 'required',
				'gambar' => 'required|file|mimes:png,jpeg,jpg|max:100040',
			]);

			$new_gambar = $gambar->getClientOriginalName();
			$gambar->move(public_path('gambar/'),$new_gambar);
		}
		else{
			$request->validate([
				'nama_mobil' => 'required',
				'harga' => 'required',
			]);
		}

		$data_penjualan = array(
			'nama_mobil' => $request->nama_mobil,
			'harga' => $request->harga,
			'dp' => $request->dp,
			'angsuran' => $request->angsuran,
			'gambar' => $new_gambar,
		);

		Alert()->success('Data berhasil', 'Update');
		MerkMobil::whereId($id)->update($data_penjualan);
		return redirect('/admin-honda/penjualan');
	}

	public function hapus_mobil($id){
		$data_penjualan = MerkMobil::find($id);
		$data_penjualan->delete();
		Alert()->success('Data berhasil di hapus', 'DELETEE');
		return redirect ('/admin-honda/penjualan');
	}
}
