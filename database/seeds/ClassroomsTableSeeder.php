<?php

use Illuminate\Database\Seeder;
use App\Classroom;
use Faker\Generator as Faker;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        $records = 3;

        for ($i = 0; $i < $records; $i++) { 
            $newClassroom = new Classroom();
            $newClassroom->name  = $faker->numberBetween(13,20);
            $newClassroom->total_students= $faker->numberBetween(24,30);
            $newClassroom->floor = $faker->numberBetween(3,5) ;

            $newClassroom->save();
        }
    }
}
