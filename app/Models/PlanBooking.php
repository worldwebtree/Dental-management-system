<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanBooking extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'plan_name', 'price', 'status'];
}
