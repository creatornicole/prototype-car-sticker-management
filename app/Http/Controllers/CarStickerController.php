<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestModell;
use Illuminate\Support\Facades\DB;

class CarStickerController extends Controller
{
    //Show all currently active Requests
    public function show() {
        $active = RequestModell::where('status', "laufend")->get(); //get all active requests
        return view('sekretariat', ['active' => $active]);
    }

    //Confirm handing over of voucher
    public function confirm(RequestModell $employee) {
        //update database entries
        $next = null;
        if($employee->next == null) { //if last value is not set -> if employee gets voucher for the first time
            $next = "Neu"; //set to current date
        }
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['last' => $next]);

        return redirect('sekretariat');
    }
}
