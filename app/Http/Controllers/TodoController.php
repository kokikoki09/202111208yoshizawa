<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = DB::table('todos')->get();
        return view('index', ['item' => $items]);
    }

    public function create(Request $request)
    {
        $param = [];
        DB::table('todos')->insert($param);
        return redirect('/');
    }
}
