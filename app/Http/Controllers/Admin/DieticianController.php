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
        $dieticians = Dietician::all();
        return view('admin.dietician.list', compact('dieticians'));
    }

    public function create(){

        return view('admin.dietician.create');
    }

//store dietician data
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                // 'certificate' => 'required',
            ]);

            // $filename = null;

            if ($request->hasFile('certificate')) { // Corrected typo
                $certificate = $request->file('certificate'); // Corrected variable name
                $filename = time() . '.' . $certificate->getClientOriginalExtension(); // Corrected variable name
                $certificate->move(public_path('admin/dietician_certificate'), $filename); // Corrected variable name
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
              'certificate' =>$filename,
               'password' => $request->password,
           ]);

            return redirect()->route('admin.dietician.list');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

//update dietician data
public function update(Request $request, $id)
{
    try {
        $request->validate([
            'email' => 'required',
           
        ]);

        if ($request->hasFile('certificate')) {
            $certificate = $request->file('certificate');
            $filename = time() . '.' . $certificate->getClientOriginalExtension();
            $certificate->move(public_path('admin/dietician_certificate'), $filename);
        }

        $dietician = Dietician::findOrFail($id);
        $loginId = $dietician->login_id;

        $login = Login::findOrFail($loginId);
        $login->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $dietician->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'location' => $request->location,
            'qualification' => $request->qualification,
            'certificate' => $request->hasFile('certificate') ? $filename : $dietician->certificate,
            'password' => $request->password,
        ]);

        return redirect()->route('admin.dietician.list');
    } catch (\Exception $e) {
        return back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
}



//Edit dietician
     public function edit($id){

        $dieticians=Dietician::find($id);
        $certificate=$dieticians->certificate;
        return view('admin.dietician.edit',compact('dieticians','certificate'));
    }

//Delete dietician

    public function delete($id){

        $dietician=Dietician::find($id);
        $dietician->login->delete();
        $dietician->delete();
        return redirect()->back();
    }

 }
