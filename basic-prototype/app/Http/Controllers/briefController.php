<?php

namespace App\Http\Controllers;

use App\Models\brief;
use Illuminate\Http\Request;

class briefController extends Controller
{
    public function viewBrief(){
        return view('addBrief');
    }
    public function addBrief(Request $req){
        $brief = new brief();
        $brief->name = $req->bName;
        $brief->start_date = $req->start_date;
        $brief->end_date = $req->end_date;
        $brief->description = $req->description;
        $brief->save();
        return redirect('showBrief');

    }
    public function showBrief(){
        $data = brief::All();
        return view('addBrief',compact('data'));
    }
}
