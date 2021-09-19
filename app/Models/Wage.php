<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wage
 *
 * @package farmaca_teste
 *
 * @author  Pedro Soares <pedrohosoares@gmail.com>
 * @OA\Schema(
 *     title="Wage model",
 *     description="Wage model",
 * )
 */
class Wage extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'amount',
        'colaborator_id'
    ];

    /**
     * Wages / Salários relacionados a colaboradores
     */

    public function colaboradores(){

        return $this->belongsTo(Colaborator::class,'colaborator_id','id');

    }

}
