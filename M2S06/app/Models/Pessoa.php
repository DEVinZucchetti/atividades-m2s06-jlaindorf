<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
/*variavel para criar ou atualizar os dados via Eloquent*/
    protected $fillable = [
        'id',
        'name',
        'cpf',
        'contact'
    ];
/*variavel para ocultar o campo do model nos retornos por exemplo  'passoword'*/
    protected $hidden = [
       
    ];
}
