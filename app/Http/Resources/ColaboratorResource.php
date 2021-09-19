<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Wage;

class ColaboratorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'cpf'=>$this->cpf,
            'rg'=>$this->rg,
            'cep'=>$this->cep,
            'endereco'=>$this->endereco,
            'numero'=>$this->numero,
            'cidade'=>$this->cidade,
            'estado'=>$this->estado,
            'salarios'=>$this->salarios()->get()
        ];
    }

}
