<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        return "テスト";
    }

    public function add()
    {
        return view('add');
    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function update()

    {

    }
}