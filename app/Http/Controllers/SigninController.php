<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    //
    public function create()
    {
        return view('signin' );
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    /*public function store(Request $request)
    {
        $attendee = new Attendee;

        $attendee->firstname = $request->firstname;
        $attendee->lastname = $request->lastname;
        $attendee->email = $request->email;
        $attendee->role = $request->role;
        $attendee->county = $request->county;
        $attendee->newsletter = $request->newsletter;

        $event($attendee)->save($attendee);
    }*/
}
