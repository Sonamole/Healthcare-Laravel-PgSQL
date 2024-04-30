<?php

namespace App\Http\Controllers\Admin;
use App\Models\Caretaker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaretakerController extends Controller
{
    public function list(){

        $caretakers=Caretaker::all();
        return view('admin.caretaker.list',compact('caretakers'));
    }

    public function create(){

        return view('admin.caretaker.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'certificate' => 'required',
            ]);

            $certifcate = null; // Initialize certificate variable

            if ($request->hasFile('certificate')) { // Corrected typo
                $certificate = $request->file('certificate'); // Corrected variable name
                $certifcate = time() . '.' . $certificate->getClientOriginalExtension(); // Corrected variable name
                $certificate->move(public_path('admin/certificate_caretaker'), $certifcate); // Corrected variable name
            }
            // dd($request);

            Caretaker::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'location' => $request->location,
                'qualification' => $request->qualification,
                'type' => $request->type,
                'certificate' => $certifcate,
            ]);

            return redirect()->route('admin.caretaker.list');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }





    public function update(Request $request, $id)
{
    try {
        $request->validate([
            'email' => 'required',
            'certificate' => 'nullable',
        ]);

        $caretaker = Caretaker::findOrFail($id);

        if ($request->hasFile('certificate')) {
            $certificate = $request->file('certificate');
            $certifcate = time() . '.' . $certificate->getClientOriginalExtension();
            $certificate->move(public_path('admin/certificate_caretaker'), $certifcate);
            if ($caretaker->certificate) {
                Storage::delete(public_path('admin/certificate_caretaker'), $certifcate);
            }
            $caretaker->certificate = $certifcate;
        }

        // Update caretaker details
        $caretaker->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'location' => $request->location,
            'qualification' => $request->qualification,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.caretaker.list');
    } catch (\Exception $e) {
        return back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
}

    public function edit($id){

        $caretaker=Caretaker::find($id);
        // dd($caretakers);
        $certificate=$caretaker->certificate;
        return view('admin.caretaker.edit',compact('caretaker','certificate'));
    }

    public function delete($id){

        $caretaker=Caretaker::findOrFail($id);
        $caretaker->delete();
        return redirect()->back();
    }


}

