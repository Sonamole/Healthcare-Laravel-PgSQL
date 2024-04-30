<?php

namespace App\Http\Controllers\Admin;
use App\Models\Dietician;
use App\Models\Login;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DieticianController extends Controller
{
    public function list(){

        return view('admin.dietician.list');
    }

    public function create(){

        return view('admin.dietician.create');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'certificate' => 'required',
            ]);

            $certifcate = null; 

            if ($request->hasFile('certificate')) { // Corrected typo
                $certificate = $request->file('certificate'); // Corrected variable name
                $certifcate = time() . '.' . $certificate->getClientOriginalExtension(); // Corrected variable name
                $certificate->move(public_path('admin/dietician_certificate'), $certifcate); // Corrected variable name
            }


            $login = Login::create([
                'name' => $request->name,
                'email' => $request->email,
                'category' => 'dietician',
                'password' => $request->password,
            ]);

            $loginId = $login->id;

            Dietician::create([
                            'login_id' => $loginId,
                            'name' => $request->name,
                            'email' => $request->email,
                            'address' => $request->address,
                            'location' => $request->location,
                            'qualification' => $request->qualification,
                            'certificate' =>$certifcate,
                            'password' => $request->password,
                        ]);

            return redirect()->route('admin.dietician.list');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

 }
