<?php

namespace App\Http\Controllers\Admin;
use App\Models\Dietician;
use App\Models\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DieticianController extends Controller
{
    public function list(){

        return view('admin.dietician.list');
    }

    public function create(){

        return view('admin.dietician.create');
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'certificate' => 'required|file',
            ]);

            // Move certificate file to designated directory
            if ($request->hasFile('certificate')) {
                $certificate = $request->file('certificate');
                $filename = time() . '.' . $certificate->getClientOriginalExtension();
                $certificate->move(public_path('dietician_certificate'), $filename);
            }

            // Create login record
            $login = Login::create([
                'name' => $request->name,
                'email' => $request->email,
                'category' => 'category',
                'password' => $request->password,
                'caretaker_id' => '1',
            ]);

            // Retrieve the ID of the newly created login record
            $loginId = $login->id;

            // Insert into the Dietician table
            Dietician::create([
                'login_id' => $loginId,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'location' => $request->location,
                'qualification' => $request->qualification,
                'certificate' => $filename
            ]);

            return redirect()->route('admin.dietician.list');
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }



 }
