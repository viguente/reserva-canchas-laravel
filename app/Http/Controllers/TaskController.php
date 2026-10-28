<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function show(Task $task)
    {
        return response()->json($task, 200);
    }

    public function update(Request $request, Task $task){
        $datos = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string|max:255',
        ]);
        
        $task->fill($datos);
        $task->save();
        return response()->noContent();
    }
}
