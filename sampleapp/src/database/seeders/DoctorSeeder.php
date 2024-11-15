<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        // Contoh data dokter
        Doctor::create([
            'name' => 'Dr. Ahmad Yusuf',
            'specialty' => 'General Practitioner',
            'email' => 'ahmadyusuf@example.com',
            'phone' => '081234567892',
        ]);

        Doctor::create([
            'name' => 'Dr. Maria Ulfa',
            'specialty' => 'Dermatologist',
            'email' => 'mariaulfa@example.com',
            'phone' => '081234567893',
        ]);

        // Tambahkan data dokter lainnya jika diperlukan
    }
}
