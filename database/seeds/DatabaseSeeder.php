<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //towns seeds
        $this->call('TownSeeder');
    }
}

class TownSeeder extends Seeder
{	
	//towns
    public function run()
    {
		//1
		DB::table('towns')->insert([
			'town_name' => 'Santa Fe',
			'population' => '1',
			'category_size' => 'capital',
			'foundation' => '1610',
			'natives' => 'Pueblo',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//2
		DB::table('towns')->insert([
			'town_name' => 'El Paso',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1659',
			'natives' => 'Comanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//3
		DB::table('towns')->insert([
			'town_name' => 'Alburquerque',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1706',
			'natives' => 'Apache',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//4
		DB::table('towns')->insert([
			'town_name' => 'San Antonio',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => 'Payaya',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//5
		DB::table('towns')->insert([
			'town_name' => 'Dallas',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1856',
			'natives' => 'Comanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//6
		DB::table('towns')->insert([
			'town_name' => 'Fort Worth',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1849',
			'natives' => 'Comanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//7
		DB::table('towns')->insert([
			'town_name' => 'Oklahoma',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1889',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//8
		DB::table('towns')->insert([
			'town_name' => 'Kansas',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1872',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//9, omaha nebraska
		DB::table('towns')->insert([
			'town_name' => 'Fort Lisa',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1812',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//10
		DB::table('towns')->insert([
			'town_name' => 'Denver',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1858',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//11
		DB::table('towns')->insert([
			'town_name' => 'Colorado Springs',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1886',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//12
		DB::table('towns')->insert([
			'town_name' => 'Rapid City',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1876',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//13
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//14
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//15
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//16
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//17
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//18
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//19
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//20
		DB::table('towns')->insert([
			'town_name' => '',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => '',
			'xcoord' => '1',
			'ycoord' => '1'
		]);

	}
}
