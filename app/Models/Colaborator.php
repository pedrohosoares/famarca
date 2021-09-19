<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaborator
 *
 * @package farmaca_teste
 *
 * @author  Pedro Soares <pedrohosoares@gmail.com>
 * @OA\Schema(
 *     title="Colaborator model",
 *     description="Colaborator model",
 * )
 */

class Colaborator extends Model
{
    use HasFactory;

    public $fillable = [
        'email',
        'cpf',
        'rg',
        'cep',
        'endereco',
        'numero',
        'cidade',
        'estado'
    ];

    /**
     * Colaboradores relacionados com o salários
     */
    public function salarios(){

        return $this->hasMany(Wage::class,'colaborator_id','id');

    }
}
