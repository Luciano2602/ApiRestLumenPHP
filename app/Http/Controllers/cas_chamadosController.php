<?php

namespace App\Http\Controllers;

// use Laravel\Lumen\Routing\Controller as BaseController;

use App\cas_chamados;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class cas_chamadosController extends Controller
{
    public function index(){
        // return son_response()->make(cas_chamados::all());
        return json_encode(cas_chamados::all());
        //return 'olaaaa';
    }
}
