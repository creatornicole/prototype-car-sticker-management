<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        //set next handing over in 4 months
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['next' => Carbon::parse($employee->next)->addMonths(4)]);
        //set last handing over to today
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['last' => Carbon::now()]);
        return redirect('sekretariat');
    }

    //Show Voucher Selection Page
    public function voucherselection() {
        $active = RequestModell::where('status', "laufend")->get(); //get all active requests
        return view('vouchers', ['active' => $active]);
    }

    //Show Voucher for each Employee
    public function change(RequestModell $employee) {
        return view('voucher', ['employee' => $employee]);
    }

    //Save Change Voucher
    public function save(Request $request, RequestModell $employee) {
        //update voucher in database
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['voucher' => $request->voucherlist]);
            return redirect('vouchers')->with('message', 'Gutscheinauswahl erfolgreich gespeichert.');
    }
}
