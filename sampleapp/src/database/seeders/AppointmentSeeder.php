<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        // Membuat jadwal untuk setiap pasien dengan dokter secara acak
        foreach ($patients as $patient) {
            Appointment::create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctors->random()->id,
                'appointment_date' => now()->addDays(rand(1, 30)), // tanggal acak dalam 30 hari ke depan
                'status' => 'scheduled',
            ]);
        }
    }
}
