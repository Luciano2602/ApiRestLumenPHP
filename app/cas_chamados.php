<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cas_chamados extends Model
{
    protected $fillable =[
        'id_chamado',
        'n_chamado',
        'id_categoria_3',
        'id_categoria_4',
        'outros'
    ];    

}
