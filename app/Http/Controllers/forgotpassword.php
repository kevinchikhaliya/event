<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotpassword extends Controller
{
    public function forgot(){
        return view('forgot');
    }

    public function password(Request $req){
        dd($req->all());
    }
}
