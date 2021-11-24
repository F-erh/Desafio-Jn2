<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Controle extends Model
{
    protected $table = 'Controle';
    protected $fillable = [
        'Nome','Telefone','CPF','Placa_do_Carro'
     ];

}
