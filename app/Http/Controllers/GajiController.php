<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;

class GajiController extends Controller
{
    //
    public function indexgaji() {
        $gaji = Gaji::all();
        return view('gaji.indexgaji', compact('gaji'));
    }
    public function showgaji($id) {
        $gaji = Gaji::find($id);
        return view('gaji.showgaji', compact('gaji'));
    }
}