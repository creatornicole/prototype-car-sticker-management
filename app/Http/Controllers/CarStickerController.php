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
        return view('vouchers');
    }
}
