<?php

use Illuminate\Database\Seeder;
use App\TripData;

class TripDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=1; $i < 7; $i++) {
        	TripData::create([
        		'pack_name'	=> $faker->name,
        		'pack_description'	=> $faker->sentence,
        		'pack_type' => $faker->word,
        		'total_credit' => $faker->randomDigit,
        		'tag_name'	=> $faker->name,
        		'validity_month'	=> $faker->randomDigit,
        		'pack_price' => $faker->randomFloat,
        		'newbie_first_attend' => $faker->boolean,
	 			'newbie_addition_credit'=> $faker->randomDigit,
        		'pack_alias' => $faker->sentence,
        		'estimate_price' => $faker->randomFloat
        	]);
        }
    }
}
