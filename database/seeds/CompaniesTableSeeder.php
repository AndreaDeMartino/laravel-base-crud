<?php

use Illuminate\Database\Seeder;
// Richiamo Modello
use App\Company;
// Richiamo Faker
use Faker\Generator as Faker;

//Non serve inserire i dati fillable nel modello per i Seeder
class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $records = 5;

        for ($i = 0; $i < $records; $i++) { 
            $newCompany = new Company();
            $newCompany->name = $faker->company ;
            $newCompany->employees_number = $faker->numberBetween(1, 4);
            $newCompany->address = $faker->streetAddress;

            $newCompany->save();
        }
    }
}
