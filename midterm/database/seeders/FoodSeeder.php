<?php



namespace Database\Seeders;
use Faker\Factory as Faker;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('foods')->insert([
                'name' => $faker->name,
                'image' => $faker->imageUrl($width = 200, $height = 200),
                'price' =>$faker ->numberBetween(5000,200000),
                'oldprice' =>$faker ->numberBetween(2000,140000),
                'description' => $faker->sentence,
            ]);
        }
    }
}
