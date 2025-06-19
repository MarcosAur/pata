<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use App\Services\Customer\StoreCustomerService;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customer.index', compact(['customers']));
    }

    public function create()
    {
        return view('customer.store');
    }

    public function store(
        StoreCustomerRequest $storeCustomerRequest,
        StoreCustomerService $storeCustomerService
    ){
        $data = $storeCustomerRequest->validated();
        $storeCustomerService->run($data);
        $customers = Customer::all();
        return view('customer.index', compact(['customers']));
    }
}
