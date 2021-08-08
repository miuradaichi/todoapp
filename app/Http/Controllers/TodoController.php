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
}
