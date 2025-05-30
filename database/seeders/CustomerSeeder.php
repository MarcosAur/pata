<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Teste 1',
                'phone' => '(85) 99999-9999'
            ],
            [
                'name' => 'Teste 2',
                'phone' => '(85) 99999-9998'
            ],
            [
                'name' => 'Teste 3',
                'phone' => '(85) 99999-9997'
            ],
            [
                'name' => 'Teste 4',
                'phone' => '(85) 99999-9996'
            ],
        ]);
    }
}
