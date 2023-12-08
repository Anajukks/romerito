<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Auth;
use App\Http\Requests\StoreTaskRequest;
class TaskController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        $tarefas = Task::all();
        return view('tasks.index', [
        'tarefas' => $tarefas,
        ]);
    }
    public function create(){
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request){

        Task::create([
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/tasks');
    }

    
}

// $validate = $request->validate([
        //     'description' => 'required|min:8',
        // ]);
        // $rules =['description' => 'required|min:8'];
        // $validate = Validator::make($request->all(), $rules);

        // if($validate->fails()){
        //    return back()
        //    -> withInput()
        //    -> withErrors($validate);
        // }