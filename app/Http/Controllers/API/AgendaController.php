<?php

namespace App\Http\Controllers\API;
use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AgendaController extends Controller
{
    public function index(){
        $agenda = Agenda::all();
        return response()->json(['message' => 'success','data' => $agenda]);
    }
}

