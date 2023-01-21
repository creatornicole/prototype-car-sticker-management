<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestModell;

class CarStickerController extends Controller
{
    //Show all currently active Requests
    public function show() {
        $active = RequestModell::where('status', "laufend")->get(); //get all active requests
        return view('sekretariat', ['active' => $active]);
    }
}
