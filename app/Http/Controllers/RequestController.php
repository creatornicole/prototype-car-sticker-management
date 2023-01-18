<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestModell;

class RequestController extends Controller
{
    //Show Request Form
    public function index() {
        return view('index');
    }

    //Save Request
    public function save(Request $request) {
        //validation
        $formFields = $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'hstn' => 'required',
            'type' => 'required',
            'cnstrYear' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1), //number of four digits required
            'color' => 'required' //(?) TODO: add regex to only accept hex code 
        ]); //sends error back in case of fail (@error in index file)

        //create in database
        RequestModell::create($formFields);

        //redirect to same page with flash message
        return redirect('/')->with('message', 'Antrag erfolgreich abgesendet.');
    }   

    //Show Requests
    public function show(Request $request) {
        return view('marketing', ['requests' => RequestModell::all()]);
    }
}
