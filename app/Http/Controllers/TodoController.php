<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        $items = TodoList::all();
        return view('index',['items'=>$items]);
    }
    public function create(Request $request){
        $this->validate($request,TodoList::$rules);
        $form = $request->all();
        TodoList::create($form);
        // return $request;
        return redirect('/');
    }
    public function update(Request $request){
        // $this -> validate($request,TodoList::$rules);
        // $form = $request->all();
        // unset($form['_token']);
        // TodoList::where('id',$request->id)->update($form);
        // return redirect('/');
        return $request;
    }
    public function delete(Request $request){
        // TodoList::find($request->id)->delete();
        // return redirect('/');
        return $request;
    }
}
