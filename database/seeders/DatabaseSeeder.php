<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker =factory::create();
            
        foreach(range(1,5) as $index){
            User::create([
                "name"=>$faker->name,
                "Profile_created_by"=>$faker->name,
                "Gender"=>$faker->name,
                "Marital_Status"=>$faker->name,
                "Religion"=>$faker->name,
                "Sect"=>$faker->name,
                "Country_living_in"=>$faker->name,
                "Country_Code"=>$faker->name,
                "Mobile_No"=>$faker->numberBetween(6,4),
                "password"=>Hash::make('12345678')
            ]);
        }
    }
}
