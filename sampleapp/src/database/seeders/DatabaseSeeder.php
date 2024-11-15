<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PatientSeeder::class,
            DoctorSeeder::class,
            AppointmentSeeder::class,
        ]);
        
        // Buat user admin hanya jika belum ada
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'), // Jangan lupa untuk mengganti password ini
            ]
        );

        $user->assignRole('super_admin');
    }
}