<?php

namespace App\Services\Customer;

use App\Models\Customer;

class StoreCustomerService
{
    public function run(array $data){
        Customer::create($data);
    }
}
