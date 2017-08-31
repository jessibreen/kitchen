<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Attendee;

class SigninController extends Controller
{
    public function create($eventId)
    {
        return view('signin', ['eventId'=>$eventId] );
    }

    public function store(Request $request)
    {
        $eventId =  Route::input('event');
        $attendee = new Attendee;
        $attendee->event_id = $eventId;//prob not mass asignable
        $attendee->firstname = $request->firstname;
        $attendee->lastname = $request->lastname;
        $attendee->email = $request->email;
        $attendee->role = $request->role;
        $attendee->county = $request->county;
        $attendee->newsletter = $request->newsletter;


        $attendee->save();

        return redirect('/events/'. $eventId );

//        $event($attendee)->save($attendee);
    }
}
