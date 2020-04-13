<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentService extends Model
{
    use SoftDeletes;

    public $table = 'appointment_service';

    protected $fillable = [
        'appointment_id',
        'service_id',
    ];

}
