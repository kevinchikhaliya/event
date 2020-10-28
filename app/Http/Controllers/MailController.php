<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Participate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public static function ParticipateEmail($name, $EventName,$EventDescription,$EventType,$Eventplace,$EventCordinatorEmail,$Eventdate,$EventTime,$email){
        $data = [
            'name' => $name,
            'EventName'=>$EventName,
            'EventType'=>$EventType,
            'Eventplace' => $Eventplace,
            'EventCordinatorEmail' =>$EventCordinatorEmail,
            'EventDescription'=>$EventDescription,
            'Eventdate' =>$Eventdate,
            'EventTime' => $EventTime
            
        ];
        Mail::to($email)->send(new Participate($data));
    }
}
