<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'id' => 1,
            'name' => 'Brio',
            'photo' => 'car-1.jpg',
            'type_id' => 1,
            'cost_per_day' => 300000,
            'year' => '2020',
            'license_plate' => 'BH 151 TT',
        ]);

        Car::create([
            'id' => 2,
            'name' => 'Fortuner',
            'photo' => 'car-2.jpg',
            'type_id' => 2,
            'cost_per_day' => 700000,
            'year' => '2022',
            'license_plate' => 'B 4 BI',
        ]);
        Car::create([
            'id' => 3,
            'name' => 'HRV',
            'photo' => 'car-3.jpg',
            'type_id' => 3,
            'cost_per_day' => 500000,
            'year' => '2021',
            'license_plate' => 'B 12 EE',
        ]);
        Car::create([
            'id' => 4,
            'name' => 'Pajero',
            'photo' => 'car-4.jpg',
            'type_id' => 2,
            'cost_per_day' => 700000,
            'year' => '2022',
            'license_plate' => 'B 45 RI',
        ]);
        Car::create([
            'id' => 5,
            'name' => 'Alphard',
            'photo' => 'car-5.jpg',
            'type_id' => 4,
            'cost_per_day' => 800000,
            'year' => '2023',
            'license_plate' => 'B 175 RW',
        ]);
    }
}
