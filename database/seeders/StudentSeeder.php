<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::factory(10)->make();
        Student::factory()
            ->count(3)
            ->for($user, 'user_id')
            ->create();
        // Student::factory()
        //     ->has(Bill::factory()->count(12))
        //     ->create();
    }
}
