<?php

namespace App\Http\Controllers;

use App\Http\Resources\ColaboratorResource;

use App\Models\Colaborator;
use Illuminate\Http\Request;

class ColaboratorController extends Controller
{
    /**
     * Página inicial da aplicação, exibe todos os colaboradores com paginação
     */

    public function index(){

        $colaborator = Colaborator::paginate(15);
        return ColaboratorResource::collection($colaborator);

    }

    /**
     * Mostra um colaborador especifico
     */

    public function show($cpfOrEmail = null){

        $colaborator = Colaborator::where('cpf',$cpfOrEmail)
            ->orWhere('email',$cpfOrEmail)
            ->firstOrFail();
        return new ColaboratorResource($colaborator);

    }

    /**
     * Cadastro de colaboradores
     */
    public function insert(Request $request){

        $newColaborator = Colaborator::create($request->all());
        if($newColaborator){
            return $newColaborator;
        }

    }

    /**
     * Atualizacao de colaborador
     */
    public function update(Request $request){

        $newColaborator = Colaborator::find($request->id);
        $newColaborator->cpf = $request->cpf;
        $newColaborator->email = $request->email;
        $newColaborator->rg = $request->rg;
        $newColaborator->cep = $request->cep;
        $newColaborator->endereco = $request->endereco;
        $newColaborator->numero = $request->numero;
        $newColaborator->cidade = $request->cidade;
        $newColaborator->estado = $request->estado;
        $newColaborator->save();
        if($newColaborator){
            return $newColaborator;
        }

    }

    /**
     * Deleta colaboradores
     */

     public function delete($id){

        $colaborator = Colaborator::findOrFail($id);
        if($colaborator->delete()){
            return new ColaboratorResource($colaborator);
        }

     }
}
