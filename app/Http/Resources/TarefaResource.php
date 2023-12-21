<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TarefaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $status = $this->concluida;
        if ($status == true) {
            $status = "Tarefa Concluida";
        }else{
            $status = "Tarefa não Concluida";
        }
        $descricao = $this->descricao;

        return [
            "id"=> $this->id,
            "descricao"=> $descricao,
            "concluida"=> $status,
            
        ];
    }
}
