<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Student::factory(10)->create();

        //     Employee::create([
        //         'name' => Str::random(10),
        //         'region' => Str::random(10),
        //         'city' => Str::random(20),
        //         'dateOfJoin' => Carbon::now(),
        //         'department' => Str::random(15),
        //         'created_at' => Carbon::now(),
        //         'updated_at' =>Carbon::now(),
        //     ]);
        // }
    }
}
