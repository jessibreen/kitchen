<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function store(Request $request)
    {
        return $request->all();
    }
}