<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\TransaksiBeneran;

class BarangController extends Controller
{
  public function barangmasuk(){
    $produks = Produk::all();
    return view('laporan.barangmasuk', compact('produks'));
  }

  public function barangkeluar(){
    $produks = TransaksiBeneran::all();
    return view('laporan.barangkeluar', compact('produks'));
  }
}
