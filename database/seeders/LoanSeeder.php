<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'id' => 1,
            'car_id' => 1,
            'user_id' => 1,
            'loan_date' => '2023-10-10',
            'return_date' => '2023-10-12',
            'total_cost' => 900000,
            'status' => 'Lunas',
        ]);
       
        Loan::create([
            'id' => 2,
            'car_id' => 2,
            'user_id' => 2,
            'loan_date' => '2023-08-22',
            'return_date' => '2023-08-21',
            'total_cost' => 1400000,
            'status' => 'Lunas',
        ]);
       
        Loan::create([
            'id' => 3,
            'car_id' => 3,
            'user_id' => 3,
            'loan_date' => '2024-07-07',
            'return_date' => '2024-07-08',
            'total_cost' => 1000000,
            'status' => 'DP',
        ]);
       
        Loan::create([
            'id' => 4,
            'car_id' => 4,
            'user_id' => 4,
            'loan_date' => '2024-06-15',
            'return_date' => '2024-06-18',
            'total_cost' => 2800000,
            'status' => 'Lunas',
        ]);
       
        Loan::create([
            'id' => 5,
            'car_id' => 5,
            'user_id' => 5,
            'loan_date' => '2024-07-01',
            'return_date' => '2024-07-02',
            'total_cost' => 1600000,
            'status' => 'Lunas',
        ]);
       
    }
}