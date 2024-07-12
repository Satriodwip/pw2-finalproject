<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'id' => 1,
            'name' => 'LCGC',
            'description' => 'Memiliki kapasitas 4 orng dengan bagasi 18lt, konsumsi bahan bakar menggunakan Pertalite/Pertamax.',
        ]);
        Type::create([
            'id' => 2,
            'name' => 'SUV',
            'description' => 'Memiliki kapasitas 7 orng dengan bagasi 30lt, konsumsi bahan bakar menggunakan Pertamina Dex/Dexalite.',
        ]);
        Type::create([
            'id' => 3,
            'name' => 'Sedan',
            'description' => 'Memiliki kapasitas 4 orng dengan bagasi 18lt, konsumsi bahan bakar menggunakan Pertalite/Pertamax.',
        ]);
        Type::create([
            'id' => 4,
            'name' => 'MPV',
            'description' => 'kendaraan multi guna. Kendaraan MPV sendiri merupakan salah satu kendaraan yang memiliki fungsi utama yaitu mengangkut penumpang maupun barang.',
        ]);
        Type::create([
            'id' => 5,
            'name' => 'Bus',
            'description' => 'kendaraan darat yang dirancang untuk mengangkut banyak penumpang. Bus dapat memiliki kapasitas hingga 30 penumpang.',
        ]);
    }
}