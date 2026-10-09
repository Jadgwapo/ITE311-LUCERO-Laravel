<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            ['student_number' => '2026-0001', 'first_name' => 'Jad', 'last_name' => 'Lucero', 'program' => 'BSIT', 'year_level' => 3, 'email' => 'jad.lucero@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0002', 'first_name' => 'Kent', 'last_name' => 'Rivera', 'program' => 'BSCS', 'year_level' => 2, 'email' => 'kent.rivera@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0003', 'first_name' => 'Kenth', 'last_name' => 'Alvarado', 'program' => 'BSIT', 'year_level' => 4, 'email' => 'kenth.alvarado@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0004', 'first_name' => 'Imee', 'last_name' => 'Santos', 'program' => 'BSCpE', 'year_level' => 1, 'email' => 'imee.santos@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0005', 'first_name' => 'Mark', 'last_name' => 'Dela Cruz', 'program' => 'BSIT', 'year_level' => 2, 'email' => 'mark.delacruz@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0006', 'first_name' => 'Anna', 'last_name' => 'Reyes', 'program' => 'BSCS', 'year_level' => 3, 'email' => 'anna.reyes@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0007', 'first_name' => 'Paolo', 'last_name' => 'Garcia', 'program' => 'BSIS', 'year_level' => 4, 'email' => 'paolo.garcia@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0008', 'first_name' => 'Liza', 'last_name' => 'Torres', 'program' => 'BSCpE', 'year_level' => 1, 'email' => 'liza.torres@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0009', 'first_name' => 'Miguel', 'last_name' => 'Bautista', 'program' => 'BSIT', 'year_level' => 3, 'email' => 'miguel.bautista@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
            ['student_number' => '2026-0010', 'first_name' => 'Grace', 'last_name' => 'Mendoza', 'program' => 'BSCS', 'year_level' => 2, 'email' => 'grace.mendoza@rmmc.edu', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}