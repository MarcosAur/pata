<?php

namespace App\Services\Appointments;

use App\Models\Appointment;

class StoreAppointmentService
{
    public function run(array $data){
        Appointment::create($data);
    }
}
