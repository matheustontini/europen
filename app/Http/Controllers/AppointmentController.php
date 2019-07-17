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
        $features = AppointmentFeature::find($id);
        return view('appointment', compact('features'));
    }

    public function store(Request $request) 
    {

    }
}

?>