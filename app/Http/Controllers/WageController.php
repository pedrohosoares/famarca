<?php

namespace App\Http\Controllers;

use App\Http\Resources\WageResource;
use App\Models\Wage;
use Illuminate\Http\Request;


class WageController extends Controller
{


    /**
     * Cadastro de salários
     */
    public function insert(Request $request){

        $newWage = Wage::create([
            'colaborator_id'=>$request->colaborador,
            'amount'=>$request->salario
        ]);
        if($newWage){
            return $newWage;
        }

    }

    /**
     * Deleta colaboradores
     */

     public function delete($id){

        $wage = Wage::findOrFail($id);
        if($wage->delete()){
            return new WageResource($wage);
        }

     }
}
