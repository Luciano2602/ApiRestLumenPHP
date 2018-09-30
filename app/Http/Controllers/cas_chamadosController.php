<?php

namespace App\Http\Controllers;

// use Laravel\Lumen\Routing\Controller as BaseController;

use App\cas_chamados;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class cas_chamadosController extends Controller
{
    public function index(){

        /*
        não funciona
        return son_response()->make(cas_chamados::all());
        */
        
        //retornando todos os chamados
        // return json_encode(cas_chamados::all());
        
        //aqui retorna a frase a baixo 
        //return 'olaaaa';

        //as linhas abaixo retorna atraves de query
        // $returno = app('db')->select("SELECT id_categoria_1, categoria_1 FROM cas_categoria_1");
        //$returno = 'db'::select("SELECT id_categoria_1, categoria_1 FROM cas_categoria_1");
        //return json_encode($returno);

        //por padrão o operador usado é = , no caso a linha ficaria cas_chamados::where('id_chamado', 699)
        /*
        $teste = cas_chamados::where('id_chamado', '>=', 699)
                            //posso usar o asc ou desc
                            ->orderBy('id_chamado','desc')
                            //limite de linhas
                            ->take(10)
                            //trazendo de fato a coleção
                            ->get();

        return json_encode($teste);
        */


        /*
        //pegando o id = 33
        $teste = cas_chamados::find(33);
        //tambem podemos passar um arry
        $teste = cas_chamados::find([33,22,23]);
        return json_encode($teste);
        */

        $teste = cas_chamados::find(33);
        return json_encode($teste);
    }

    
}
