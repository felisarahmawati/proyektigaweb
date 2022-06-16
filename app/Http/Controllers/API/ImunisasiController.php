<?php

namespace App\Http\Controllers\API;

use App\Imunisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ImunisasiController extends Controller
{
    public function index(){
        $imunisasi = Imunisasi::all();
        return response()->json(['message' => 'success','data' => $imunisasi]);
    }
}
