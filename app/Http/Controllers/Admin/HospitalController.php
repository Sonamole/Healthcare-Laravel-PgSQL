<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function list(){

        return view('admin.hospital.list');
    }

    public function store(){

        return view('admin.hospital.create');
    }
}
