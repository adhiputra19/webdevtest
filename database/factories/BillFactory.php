<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    public function definition()
    {
        $paymentMethods = ['BCA', 'Mandiri', 'OVO', 'Gopay'];

        return [
            'subscription' => $this->faker->randomElement(['Netflix', 'Facebook', 'Spotify', 'Disney+']),
            'price' => $this->faker->randomElement(range(20000, 500000, 20000)), // Harga dalam kelipatan 20.000
            'date' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d'), // Tahun 2024            
            'frequency' => $this->faker->randomElement(['Harian', 'Bulanan', 'Mingguan', 'Tahunan']),
            'payment_method' => $this->faker->randomElement($paymentMethods),
            'note' => $this->faker->randomElement(['Sudah Diperpanjang', 'Belum Diperpanjang']),
        ];
    }
}
