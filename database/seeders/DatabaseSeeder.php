<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();

        Dentist::factory(1)->create([
            'user_id' => User::value('id'),
        ]);

        Patient::factory(1)->create([
            'user_id' => User::value('id'),
        ]);

        Appointment::factory(3)->create([
            'Patient_id' => Patient::value('id'),
            'Dentist_id' => Dentist::value('id'),
        ]);

        Transaction::factory(3)->create([
            'Patient_id' => Patient::value('id'),
            'appointment_id' => Appointment::value('id'),
        ]);
    }
}
