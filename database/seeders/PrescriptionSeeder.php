<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prescriptions')->insert([
            [
                'patient_name' => 'John Doe',
                'details' => 'Amoxicillin 500mg, Take one tablet three times a day',
                'date' => '2024-10-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_name' => 'Jane Smith',
                'details' => 'Ibuprofen 400mg, Take one tablet every 6 hours as needed',
                'date' => '2024-10-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_name' => 'Alice Johnson',
                'details' => 'Lisinopril 10mg, Take one tablet daily',
                'date' => '2024-10-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
