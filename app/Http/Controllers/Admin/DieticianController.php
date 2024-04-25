<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DieticianController extends Controller
{
    public function list(){

        return view('admin.dietician.list');
    }

    public function store(){

        return view('admin.dietician.create');
    }
}
