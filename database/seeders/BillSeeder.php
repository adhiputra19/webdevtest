<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bill;

class BillSeeder extends Seeder
{
    public function run()
    {
        Bill::factory()->count(1000)->create(); // Mengisi 50 data dummy
    }
}

