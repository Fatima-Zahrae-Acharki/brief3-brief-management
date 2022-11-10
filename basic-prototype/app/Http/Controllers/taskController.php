<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function viewTask(){
        return view('addTask');
    }

    public function allTasks(){
        return view('showTask');
    }

    public function addTask(Request $req){
        $task = new task();
        $task->name = $req->bName;
        $task->start_date = $req->start_date;
        $task->end_date = $req->end_date;
        $task->description = $req->description;
        $task->save();
        return redirect('showTask');
    }

    public function showTasks(){
        $data = task::All();
        return view('showTask',compact('data'));
    }
}
