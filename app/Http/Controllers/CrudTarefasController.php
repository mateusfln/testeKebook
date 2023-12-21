<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefasRequest;
use App\Http\Resources\TarefaResource;
use App\Models\Tarefas;

use function Symfony\Component\HttpFoundation\isEmpty;

class CrudTarefasController extends Controller
{
    /**
     * método para listar todos as tarefas.
     */
    public function index()
    {
        $tarefa = TarefaResource::collection(Tarefas::all());

      if($tarefa->isEmpty()) {
        return response()->json(['message' => 'Lista de tarefas vazia'], 404);

    }
    return response()->json($tarefa, 200);
}


    
    /**
     * método para criar novas tarefas.
     */
    public function store(TarefasRequest $request)
    {

        
        $tarefa = Tarefas::create($request->all());

        if ($tarefa->concluida === 1 || $tarefa->concluida === 0|| $tarefa->concluida === true || $tarefa->concluida === false) {
           
            return response()->json(['message' => 'Tarefa '.$tarefa->id. ' adicionada com sucesso'], 201); // status de sucesso
            
        }
        return response()->json(['error' => 'Erro ao adicionar tarefa, valor nao booleano'], 404); // status de erro
        
        

    }

    /**
     * método para mostrar uma tarefa especifica.
     */
    public function show(string $id)
    {
        
        try {
            $tarefa = new TarefaResource(Tarefas::where('id',$id)->first());//resource para filtrar os dados e facilitar o entendimento das informações fornecidas pela api
            return response()->json($tarefa, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao mostrar tarefa'], 400);
        }

    }


    /**
     * método para alterar a descrição de uma tarefa.
     */
    public function update(TarefasRequest $request, string $id)
    {
       
       try{

        $tarefa = Tarefas::findOrFail($id);

        $tarefa->update($request->all());

        return response()->json(['message' => 'Tarefa '.$id. ' atualizada com sucesso'], 200);

       }catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar tarefa',], 404);
        }



    }

    /**
     * método para deletar uma tarefa especifica.
     */
    public function destroy(string $id)
    {
        if (!Tarefas::find($id)){
            return response()->json(['message'=> 'id inexistente'], 404);
        } 

        Tarefas::find($id)->delete();

        return response()->json(['message' => 'Tarefa '.$id. ' deletada com sucesso'], 200); //feedback para o usuario de que a ação ocorreu com sucesso
    }

    public function changeStatus(string $id)
    {
       
        $tarefa = Tarefas::find($id);
    
        if ($tarefa) {
        
        $tarefa->concluida = !$tarefa->concluida;

        
        $tarefa->save();

        return response()->json(['message' => 'Status atualizado com sucesso'], 200);
    } else {
        return response()->json(['error' => 'Tarefa não encontrada'], 404);
    }
        



    }
}
