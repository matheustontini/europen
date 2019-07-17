<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentFeature extends Model
{
    protected $table = "appointment";

    public function appointment()
    {
        return $this->hasMany('App\HERE');
    }

    public function HERE()
    {
        return $this->images()->first();
    }