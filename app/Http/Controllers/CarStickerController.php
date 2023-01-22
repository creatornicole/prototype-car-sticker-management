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
        return view('voucher.sekretariat', ['active' => $active]);
    }

    //Inform user to get voucher
    public function inform(RequestModell $employee) {
        //send mail to inform employee to get voucher
        app('App\Http\Controllers\MailController')->getVoucher($employee);
        return redirect('sekretariat');
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

        //send mail
        app('App\Http\Controllers\MailController')->voucherConfirmation($employee);
        
        return redirect('sekretariat')->with('message', 'Gutschein Benachrichtigung erfolgreich versendet.');
    }

    //Show Voucher Selection Page
    public function voucherselection() {
        $active = RequestModell::where('status', "laufend")->get(); //get all active requests
        return view('voucher.vouchers', ['active' => $active]);
    }

    //Show Voucher for Employee
    public function change(RequestModell $employee) {
        return view('voucher.voucher', ['employee' => $employee]);
    }

    //Save Change Voucher
    public function save(Request $request, RequestModell $employee) {
        //update voucher in database
        DB::table('request_modells')
            ->where('id', $employee->id)
            ->update(['voucher' => $request->voucherlist]);

        //send mail
        app('App\Http\Controllers\MailController')->voucherChange($employee, $request->voucherlist);

        return redirect('vouchers')->with('message', 'Gutscheinauswahl erfolgreich gespeichert.');
    }
}
