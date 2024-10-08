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
                // Ensure there are patients in the database
                $patients = DB::table('patients')->pluck('id')->toArray();

                // Insert sample data into the prescriptions table
                DB::table('prescriptions')->insert([
                    [
                        'patient_id' => $patients[array_rand($patients)],
                        'note' => 'Amoxicillin 500mg, Take one tablet three times a day',
                        'prescription_status' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'patient_id' => $patients[array_rand($patients)],
                        'note' => 'Ibuprofen 400mg, Take one tablet every 6 hours as needed',
                        'prescription_status' => false,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'patient_id' => $patients[array_rand($patients)],
                        'note' => 'Lisinopril 10mg, Take one tablet daily',
                        'prescription_status' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'patient_id' => $patients[array_rand($patients)],
                        'note' => 'Metformin 500mg, Take one tablet twice a day',
                        'prescription_status' => false,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'patient_id' => $patients[array_rand($patients)],
                        'note' => 'Atorvastatin 20mg, Take one tablet at bedtime',
                        'prescription_status' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ]);
    }
}
