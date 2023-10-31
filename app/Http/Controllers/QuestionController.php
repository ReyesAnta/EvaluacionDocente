<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Alert;

class QuestionController extends Controller
{
    public function index()
    {
        return view('questions.index');
    }

    public function list_questions()
    {
        $questions = Question::orderByDesc('nombre')->get();
        $data = collect();
        foreach ($questions as $key => $item) {
            $route_edit = route('questions.edit',$item->id);
            $acciones ='<a href="'.$route_edit.'" class="btn btn-warning" data-bs-toggle="tooltip" title="Editar"><i class="fas fa-pen"></i></a>
            <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Eliminar" onclick="deleteRegister('.$item->id.')"><i class="fas fa-trash-alt"></i></button>';
            $data->push(
                array(
                    $key+1,
                    $item->nombre,
                    date('d/m/Y h:i a',strtotime($item->created_at)),
                    $acciones
                )
            );
        }
        $results = array(
            "draw" => 0,
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
            "data" => $data
        );
        
        return response()->json($results);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $question = new Question;
        $question->nombre = $request->nombre;
        $question->save();

        Alert::success('Pregunta agregado con exito', '')->autoclose(5000);

        return redirect()->route('questions.index');
    }

    public function edit($user_id)
    {
        $questions = Question::find($user_id);
        if($questions){
            return view('questions.edit',compact('questions'));
        }else{
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->nombre = $request->nombre;
        $question->save();
        Alert::success('Pregunta actualizado con exito', '')->autoclose(5000);
        return redirect(route('questions.index'));
    }

    public function destroy($id)
    {
        Question::where('id',$id)->delete();
        
        return response()->json(
            array(
                'result' => true,
                'message' => 'Pregunta eliminado con exito'
            )
        );
    }
}
