<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function mainmenu() {
		return view('mainmenu');
	}

	public function indexinventory(){
		return view('inventory.index');
	}
}
