<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumentasi;
use App\Photos;
use App\Populer;
use Alert;

class AdokumentasiController extends Controller
{
	public function dokumentasi(){
		$data_dokumentasi = Dokumentasi::latest()->paginate(10);
		return view ('admin.dokumentasi',compact('data_dokumentasi'))->with('i',(request()->input('page',1) -1) * 10);
	}

	public function tambah(Request $request){
		$request->validate([
			'keterangan' => 'required',
			'foto' => 'required|file|mimes:png,jpeg,jpg|max:3048',
		]);

		$foto = $request->file('foto');
		$new_foto = $foto->getClientOriginalName();
		$foto->move(public_path('foto/'),$new_foto);

		$data_dokumentasi = array(
			'keterangan' => $request->keterangan,
			'foto' => $new_foto
		);

		Dokumentasi::create($data_dokumentasi);
		Alert()->success('data berhasil', 'tersimpan');
		return redirect ('/admin-honda/dokumentasi');
	}

	public function edit($id){
		$data_dokumentasi = Dokumentasi::find($id);
		return view ('admin.edit-dokumentasi',compact('data_dokumentasi'));
	}

	public function update(Request $request, $id){
		$new_foto = $request->hidden_foto;
		$foto = $request->file('foto');
		if ($foto !='') 
		{
			$request->validate([
				'keterangan' => 'required',
				'foto' => 'required|file|mimes:png,jpeg,jpg|max:100040',
			]);

			$new_foto = $foto->getClientOriginalName();
			$foto->move(public_path('foto/'),$new_foto);
		}
		else{
			$request->validate([
				'keterangan' => 'required',
			]);
		}

		$data_dokumentasi = array(
			'keterangan' => $request->keterangan,
			'foto' => $new_foto,
		);

		Dokumentasi::whereId($id)->update($data_dokumentasi);
		Alert()->success('data berhasil', 'Update');
		return redirect('/admin-honda/dokumentasi');
	}

	public function hapus(Request $request, $id){
		$data_dokumentasi = Dokumentasi::find($id);
		$data_dokumentasi->delete();
		return redirect ('/admin-honda/dokumentasi');
	}

	//gambar
	public function gambar(){
		$data_photos = Photos::latest()->paginate(10);
		$data_populer = Populer::latest()->paginate(10);
		return view ('admin.gambar',compact('data_photos','data_populer'));
	}

	public function edit_gambar($id){
		$data_photos = Photos::find($id);
		return view ('admin.edit-gambar',compact('data_photos'));
	}

	public function update_gambar(Request $request, $id){
		$new_photos = $request->hidden_photos;
		$photos = $request->file('photos');
		if ($photos !='') 
		{
			$request->validate([
				'caption' => 'required',
				'photos' => 'required|file|mimes:png,jpeg,jpg|max:100040',
			]);

			$new_photos = $photos->getClientOriginalName();
			$photos->move(public_path('foto/'),$new_photos);
		}
		else{
			$request->validate([
				'caption' => 'required',
			]);
		}

		$data_photos = array(
			'caption' => $request->caption,
			'photos' => $new_photos,
		);

		Photos::whereId($id)->update($data_photos);
		Alert()->success('data berhasil', 'Update');
		return redirect('/admin-honda/gambar');
	}

	public function hapus_gambar($id){
		$data_photos = Photos::find($id);
		Alert()->error('Data Berhasil', 'DELETEE');
		return redirect ('/admin-honda/gambar');
	}

	// populer
	public function edit_populer($id){
		$data_populer = Populer::find($id);
		return view ('admin.edit-populer',compact('data_populer'));
	}

	public function update_populer(Request $request, $id){
		$new_populer = $request->hidden_populer;
		$foto_populer = $request->file('foto_populer');
		if ($foto_populer !='') 
		{
			$request->validate([
				'ket_populer' => 'required',
				'foto_populer' => 'required|file|mimes:png,jpeg,jpg|max:100040',
			]);

			$new_populer = $foto_populer->getClientOriginalName();
			$foto_populer->move(public_path('foto/'),$new_populer);
		}
		else{
			$request->validate([
				'ket_populer' => 'required',
			]);
		}

		$data_populer = array(
			'ket_populer' => $request->ket_populer,
			'foto_populer' => $new_populer,
		);

		Populer::whereId($id)->update($data_populer);
		Alert()->success('data berhasil', 'Update');
		return redirect('/admin-honda/gambar');
	}

	public function hapus_populer($id){
		$data_populer = Populer::find($id);
		Alert()->error('Data Berhasil', 'DELETEE');
		return redirect ('/admin-honda/gambar');
	}
}
