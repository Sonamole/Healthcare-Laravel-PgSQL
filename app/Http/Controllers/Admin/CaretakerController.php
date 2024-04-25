<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaretakerController extends Controller
{
    public function list(){

        return view('admin.caretaker.list');
    }

    public function store(){

        return view('admin.caretaker.create');
    }
}
