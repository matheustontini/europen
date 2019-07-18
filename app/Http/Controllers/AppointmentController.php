<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppointmentFeature;

class AppointmentController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only('create');
    }

    public function show($id) 
    {
      
        return view('pages/appointment');
    }

    public function index ()
    {
        Mail::to('europen-acdc0c@inbox.mailtrap.io')->send(new Mailtrap($order));
    }

}

?>