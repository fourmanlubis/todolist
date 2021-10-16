<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todocontroller extends Controller
{
    
    public function tampiltodo(){
        $todolist = \DB::table("tbltodo")->get();
        return view("todo")
            ->with("todolist",todo::all());
    route::get('/todo/del/{id}',[todocontoller:;class,"hapustodo"]);

            
    }
}
