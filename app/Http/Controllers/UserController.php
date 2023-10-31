<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Course;
use App\Models\Position;
use App\Models\Question;
use App\Models\Qualification;
use App\Models\QualificationsQuestion;
use Auth;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function list_users()
    {
        $users = User::orderByDesc('nombres')->get();
        $data = collect();
        foreach ($users as $key => $item) {
            $route_edit = route('users.edit',$item->id);
            $acciones ='<a href="'.$route_edit.'" class="btn btn-warning" data-bs-toggle="tooltip" title="Editar"><i class="fas fa-pen"></i></a> ';
            if($item->id != 1){
                $acciones .= '<button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Eliminar" onclick="deleteRegister('.$item->id.')"><i class="fas fa-trash-alt"></i></button>';
            }
            $data->push(
                array(
                    $key+1,
                    $item->profile->nombre,
                    $item->position->nombre,
                    ($item->course_id) ? $item->course->nombre : '-',
                    $item->nombres,
                    $item->email,
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
        $profile = Profile::where('id','!=',3)->pluck('nombre','id')->prepend('Seleccionar','');
        $course = Course::pluck('nombre','id')->prepend('Seleccionar','');
        return view('users.create',compact('profile','course'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->profile_id = $request->profile_id;
        $user->position_id = $request->position_id;            
        if($request->profile_id == 2){
            $user->course_id = $request->course_id;
        }
        $user->nombres = $request->nombres;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Alert::success('Usuario agregado con exito', '')->autoclose(5000);

        return redirect()->route('users.index');
    }

    public function edit($user_id)
    {
        $users = User::find($user_id);
        if($users){
            $profile = Profile::where('id','!=',3)->pluck('nombre','id')->prepend('Seleccionar','');
            $course = Course::pluck('nombre','id')->prepend('Seleccionar','');
            return view('users.edit',compact('users', 'course','profile'));
        }else{
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($id != 1){
            $user->profile_id = $request->profile_id;
            $user->position_id = $request->position_id;         
            if($request->profile_id == 2){
                $user->course_id = $request->course_id;
            }
        }
        $user->nombres = $request->nombres;
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);            
        }
        $user->save();
        Alert::success('Usuario actualizado con exito', '')->autoclose(5000);
        return redirect(route('users.index'));
    }

    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
        
        return response()->json(
            array(
                'result' => true,
                'message' => 'Usuario eliminado con exito'
            )
        );
    }

    public function get_position($profile_id)
    {
        $data = Position::where('profile_id',$profile_id)->get();
        return response()->json([
            'result' => true,
            'data' => $data
        ]);
    }

    public function ratings_index()
    {
        $fecha_fin = date("Y-m-d");
        $fecha_inicio = date("Y-m-d",strtotime($fecha_fin."- 3 month"));
        return view('ratings.index',compact('fecha_inicio','fecha_fin'));
    }

    public function ratings_list(Request $request)
    {
        $user = Auth::user();
        $qualifications = Qualification::when(true, function ($query) use ($user) {
            if($user->profile_id == 1){
                $query->where('evaluador_id',$user->id);
            }else if($user->profile_id == 2){
                $query->where('user_id',$user->id);
            }
            return $query;
        })
        ->whereDate('created_at','>=',$request->fecha_inicio)
        ->whereDate('created_at','<=',$request->fecha_fin)
        ->get();
        $data = collect();
        foreach ($qualifications as $key => $value) {
            $promedio = QualificationsQuestion::where('qualification_id',$value->id)->avg('puntaje');
            $acciones = '';
            $acciones .= '<button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="Ver Preguntas" onclick="ver_calificacion('.$value->id.')"><i class="fas fa-eye"></i></button>';
            if($user->profile_id == 1){
                $acciones .= ' <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Eliminar" onclick="delete_register('.$value->id.')"><i class="fas fa-trash-alt"></i></button>';
                $data->push([
                    $key+1,
                    $value->user->nombres,
                    $value->user->position->nombre,
                    $value->user->course->nombre,
                    date('d/m/Y h:i a',strtotime($value->created_at)),
                    round($promedio,1),
                    ($promedio > 10) ? '<span class="badge bg-success">Aprobado</span>' : '<span class="badge bg-danger">Desaprobado</span>',
                    $acciones
                ]);
            }else if($user->profile_id == 2){
                $data->push([
                    $key+1,
                    $value->user->position->nombre,
                    $value->user->course->nombre,
                    $value->evaluador->nombres,
                    date('d/m/Y h:i a',strtotime($value->created_at)),
                    round($promedio,1),
                    ($promedio > 10) ? '<span class="badge bg-success">Aprobado</span>' : '<span class="badge bg-danger">Desaprobado</span>',
                    $acciones
                ]);
            }else{
                $data->push([
                    $key+1,
                    $value->user->nombres,
                    $value->user->position->nombre,
                    $value->user->course->nombre,
                    $value->evaluador->nombres,
                    date('d/m/Y h:i a',strtotime($value->created_at)),
                    round($promedio,1),
                    ($promedio > 10) ? '<span class="badge bg-success">Aprobado</span>' : '<span class="badge bg-danger">Desaprobado</span>',
                    $acciones
                ]);
            }
        }

        $results = array(
            "draw" => 0,
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
            "data" => $data
        );

        return response()->json($results);
    }

    public function ratings_create()
    {
        $user = Auth::user();
        $users = User::where('profile_id',2)
        ->when(true, function ($query) use ($user) {
            if($user->position_id == 1){
                $query->where('position_id',4);
            }else if($user->position_id == 2){
                $query->where('position_id',5);
            }
            return $query;
        })
        ->pluck('nombres','id')
        ->prepend('Seleccionar','');
        $questions = Question::get();
        return view('ratings.create',compact('users','questions'));
    }

    public function ratings_store(Request $request)
    {
        $qualification = new Qualification;
        $qualification->user_id = $request->user_id;
        $qualification->evaluador_id = Auth::user()->id;
        $qualification->save();

        for ($i=0; $i < $request->question; $i++) { 
            $array = $request->get('question-'.$i);
            $question = Question::find($array["id"]);
            $user_question = new QualificationsQuestion;
            $user_question->qualification_id = $qualification->id;
            $user_question->question = $question->nombre;
            $user_question->puntaje = $array["puntaje"];
            $user_question->save();
        }

        Alert::success('Calificación agregado con exito', '')->autoclose(5000);
        return redirect()->route('ratings.index');
    }

    public function ratings_delete($id)
    {
        $qualification = Qualification::find($id);
        $result = true;
        $message = null;
        if($qualification){
            $qualification->delete();
            $message = "Calificación eliminado con exito";
        }else{
            $result = false;
            $message = "Calificación no encontrada";
        }

        return response()->json([
            'result' => $result,
            'message' => $message
        ]);
    }

    public function ratings_details($id)
    {
        $data = QualificationsQuestion::where('qualification_id',$id)->get();
        return view('questions.qualifications',compact('data'))->render();
    }
}
