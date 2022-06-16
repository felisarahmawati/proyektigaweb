<?php

namespace App\Http\Controllers\API;

use App\Panduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PanduanController extends Controller
{
    public function index(){
        $panduan = Panduan::all();
        return response()->json(['message' => 'success','data' => $panduan]);
    }
}
