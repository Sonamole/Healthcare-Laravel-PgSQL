<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function medicine(){

        return view('admin.medical.medicine');
    }

    public function medicalreport(){

        return view('admin.medical.medicalreport');
    }
}
