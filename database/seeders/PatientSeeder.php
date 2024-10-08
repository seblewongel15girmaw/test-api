<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert sample data into the patients table
        DB::table('patients')->insert([
            [
                'patient_name' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_name' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_name' => 'Alice Johnson',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_name' => 'Bob Brown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_name' => 'Emily Davis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
