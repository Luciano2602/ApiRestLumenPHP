<?php

namespace App\Http\Controllers;

// use Laravel\Lumen\Routing\Controller as BaseController;

use App\cas_categoria_3;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class cas_categoria_3Controller extends Controller
{
    public function index(){
        // return son_response()->make(cas_chamados::all());
        return json_encode(cas_categoria_3::all());
        //return 'olaaaa';
    }
}
