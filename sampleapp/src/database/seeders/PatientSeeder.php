<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        // Contoh data pasien
        Patient::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '081234567890',
            'address' => 'Jl. Mawar No. 123, Jakarta',
        ]);

        Patient::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'phone' => '081234567891',
            'address' => 'Jl. Melati No. 456, Bandung',
        ]);

        // Kamu bisa menambahkan data pasien lainnya di sini
    }
}
