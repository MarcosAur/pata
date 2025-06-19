<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\Customer;
use App\Services\Appointments\StoreAppointmentService;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointment.index', compact('appointments'));
    }

    public function create(){
        $customers = Customer::all()->pluck('name', 'id');
        return view('appointment.store', compact('customers'));
    }

    public function store(
        StoreAppointmentRequest $storeAppointmentRequest,
        StoreAppointmentService $storeAppointmentService
    ){
        $data = $storeAppointmentRequest->validated();
        $storeAppointmentService->run($data);
        $appointments = Appointment::all();
        return view('appointment.index', compact('appointments'));
    }
}
