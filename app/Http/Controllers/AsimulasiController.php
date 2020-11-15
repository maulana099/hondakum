<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsimulasiController extends Controller
{
	public function simulasi_kredit(){
		return view ('admin.simulasi-kredit');
	}
}
