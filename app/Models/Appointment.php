<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Appointment extends Model
{
    protected $fillable = [
      'customer_id',
      'appointment_date',
    ];

    protected $casts = [
      'appointment_date' => 'datetime:Y-m-d H:i:s'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    protected function formattedAppointmentDate(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->appointment_date->format('d/m/Y H:i'),
        );
    }


}
