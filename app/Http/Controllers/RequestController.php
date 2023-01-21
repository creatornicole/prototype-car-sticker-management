<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\RequestModell;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    //Show Request Form
    public function index() {
        return view('request.index');
    }

    //Save Request
    public function save(Request $request) {
        //validation
        $formFields = $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            'email' => ['required', 'email'], //has to be formatted like email
            'brand' => 'required',
            'model' => 'required',
            'hstn' => 'required',
            'type' => 'required',
            'cnstrYear' => 'required|digits:4|integer|min:1900|max:'.(date('Y')), //number of four digits required
            'color' => 'required' //(?) TODO: add regex to only accept hex code 
        ]); //sends error back in case of fail (@error in index file)

        //create in database
        RequestModell::create($formFields);

        //redirect to same page with flash message
        return redirect('request.index')->with('message', 'Antrag erfolgreich abgesendet.');
    }   

    //Show Requests
    public function show() {
        $requested = RequestModell::where('status', "beantragt")->get(); //get all requested requests
        $confirmed = RequestModell::where('status', "bestaetigt")->get(); //get all confirmed request
        return view('request.marketing', ['requested' => $requested, 'confirmed' => $confirmed]);
    }

    //Show Appointment Page
    public function appointment(RequestModell $employee) {
        return view('request.appointment', ['employee' => $employee])->with('eID', $employee->id);
    }

    //Reject Request
    public function delete(RequestModell $employee) {
        //reject request by deleting from database
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->delete();
        return redirect('/marketing');
    }

    //Save Appointment
    public function saveAppointment(Request $request, RequestModell $employee) {
        //update status in database
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['status' => "bestaetigt"]);
        //validation
        $formFields = $request->validate([
            'appointment' => 'required|date_format:d.m.Y'
        ]);
        //set date value in database
        $employee->update($formFields);
        //redirect to requests page
        return redirect('/marketing');
    }

    //Confirm Appointment
    public function confirmAppointment(Request $request, RequestModell $employee) {
        //update status in database
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['status' => "laufend"]);
        //update next handing over of voucher
        $next = Carbon::parse($employee->appointment)->addMonths(4);
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['next' => $next]);
        //redirect to requests page
        return redirect('/marketing');
    }
}
