<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AcademicsController extends Controller
{
    public function session()
    {
        return view('Academic/sessions');
    }

    public function getSession()
    {
        return view('Academic/create_session');
    }
}
