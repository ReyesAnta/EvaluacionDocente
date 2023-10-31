<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Qualification;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $questions = Question::count();
        $user = Auth::user();
        $qualifications = Qualification::when(true, function ($query) use ($user) {
            if($user->profile_id == 1){
                $query->where('evaluador_id',$user->id);
            }else if($user->profile_id == 2){
                $query->where('user_id',$user->id);
            }
            return $query;
        })
        ->count();
        return view('home',compact('users','questions','qualifications'));
    }
}
