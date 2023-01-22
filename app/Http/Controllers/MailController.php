<?php

namespace App\Http\Controllers;

use App\Mail\VoucherChange;
use Illuminate\Http\Request;
use App\Models\RequestModell;
use App\Mail\RequestRejection;
use App\Mail\RequestNotification;
use App\Mail\GetVoucherConfirmation;
use App\Mail\GetVoucherNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;
use App\Mail\AppointmentNotification;

class MailController extends Controller
{
    //send request notification to marketing team
    //inform about new request
    public function sendRequestNotification() {
        Mail::to('marketing@testmail.com')->send(new RequestNotification());
    }

    //send appointment to employee
    //also inform that request was confirmed
    public function sendAppointmentNotification(RequestModell $employee) {
        Mail::to($employee->email)->send(new AppointmentNotification($employee));
    }

    //send confirmation of appointment (that appointment happened) to employee
    public function sendAppointmentConfirmation(RequestModell $employee) {
        Mail::to($employee->email)->send(new AppointmentConfirmation($employee));
    }

    //send notification mail to employee
    //inform that request was rejected
    public function sendRejection(RequestModell $employee) {
        Mail::to($employee->email)->send(new RequestRejection($employee));
    }

    //send notification to employee that voucher changed
    public function voucherChange(RequestModell $employee, String $voucher) {
        Mail::to($employee->email)->send(new VoucherChange($voucher));
    }

    //send notification to employee to get their voucher
    public function getVoucher(RequestModell $employee) {
        Mail::to($employee->email)->send(new GetVoucherNotification($employee->voucher));
    }

    //to confirm that voucher was handed over
    public function voucherConfirmation(RequestModell $employee) {
        Mail::to($employee->email)->send(new GetVoucherConfirmation($employee));
    }
}
