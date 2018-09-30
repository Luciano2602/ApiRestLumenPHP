<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Factories\ModelFactory;

class cas_chamados extends Model
{
    protected $primaryKey = 'id_chamado';

    protected $fillable =[
        'id_chamado',
        'n_chamado',
        'id_categoria_3',
        'id_categoria_4',
        'outros'
    ];    

    

}
