<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list(){

        return view('admin.staff.list');
    }

    public function store(){

        return view('admin.staff.create');
    }
}
