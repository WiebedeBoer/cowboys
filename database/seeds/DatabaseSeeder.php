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
		//new mexico
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
			'town_name' => 'Alburquerque',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1706',
			'natives' => 'Apache',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//texas
		//3
		DB::table('towns')->insert([
			'town_name' => 'El Paso',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1659',
			'natives' => 'Commanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//4
		DB::table('towns')->insert([
			'town_name' => 'Austin',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1835',
			'natives' => 'Comanche',
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
			'category_size' => 'fort',
			'foundation' => '1849',
			'natives' => 'Comanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//7
		DB::table('towns')->insert([
			'town_name' => 'Houston',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1837',
			'natives' => 'Karankawa',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//8
		DB::table('towns')->insert([
			'town_name' => 'San Antonio',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => 'Payaya',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//colorado
		//9
		DB::table('towns')->insert([
			'town_name' => 'Denver',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1858',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//10
		DB::table('towns')->insert([
			'town_name' => 'Colorado Springs',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1886',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//11
		DB::table('towns')->insert([
			'town_name' => 'Pueblo',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//oklahoma
		//12
		DB::table('towns')->insert([
			'town_name' => 'Oklahoma',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1889',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//kansas
		//13
		DB::table('towns')->insert([
			'town_name' => 'Wichita',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1868',
			'natives' => 'Wichita',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//14
		DB::table('towns')->insert([
			'town_name' => 'Kansas',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1872',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//nebraska
		//15, omaha, nebraska
		DB::table('towns')->insert([
			'town_name' => 'Fort Lisa',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1812',
			'natives' => 'Pawnee',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//16, lincoln, nebraska
		DB::table('towns')->insert([
			'town_name' => 'Lancaster',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1856',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//south dakota
		//17
		DB::table('towns')->insert([
			'town_name' => 'Rapid City',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1876',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//18, sioux falls, south dakota
		DB::table('towns')->insert([
			'town_name' => 'Fort Dakota',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1865',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//north dakota
		//19, bismarck, north dakota
		DB::table('towns')->insert([
			'town_name' => 'Edwinton',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1872',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//20
		DB::table('towns')->insert([
			'town_name' => 'Fargo',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1871',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//montana
		//21
		DB::table('towns')->insert([
			'town_name' => 'Billings',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1877',
			'natives' => 'Crow',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//22
		DB::table('towns')->insert([
			'town_name' => 'Bozeman',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1864',
			'natives' => 'Crow',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//idaho
		//23
		DB::table('towns')->insert([
			'town_name' => 'Fort Boise',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1863',
			'natives' => 'Shoshone',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//24
		DB::table('towns')->insert([
			'town_name' => 'Idaho Falls',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1864',
			'natives' => 'Shoshone',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//wyoming
		//25
		DB::table('towns')->insert([
			'town_name' => 'Fort Caspar',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1859',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//utah
		//26, ogden, utah
		DB::table('towns')->insert([
			'town_name' => 'Fort Buenaventura',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1844',
			'natives' => 'Shoshone',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//27, provo, utah
		DB::table('towns')->insert([
			'town_name' => 'Fort Utah',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1849',
			'natives' => 'Ute',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//28
		DB::table('towns')->insert([
			'town_name' => 'Salt Lake City',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1847',
			'natives' => 'Shoshone',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//arizona
		//29
		DB::table('towns')->insert([
			'town_name' => 'Phoenix',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1867',
			'natives' => 'Navajo',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//30
		DB::table('towns')->insert([
			'town_name' => 'Tucson',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1775',
			'natives' => 'Apache',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//nevada
		//31
		DB::table('towns')->insert([
			'town_name' => 'Reno',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1868',
			'natives' => 'Paiute',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//washington
		//32
		DB::table('towns')->insert([
			'town_name' => 'Spokane',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1873',
			'natives' => 'Spokane',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//33
		DB::table('towns')->insert([
			'town_name' => 'Seattle',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1851',
			'natives' => 'Duwamish',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//oregon
		//34
		DB::table('towns')->insert([
			'town_name' => 'Portland',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1845',
			'natives' => 'Chinook',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//35
		DB::table('towns')->insert([
			'town_name' => 'Eugene',
			'population' => '1846',
			'category_size' => 'small',
			'foundation' => '1',
			'natives' => 'Kalapuya',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//california
		//36, sacramento, california
		DB::table('towns')->insert([
			'town_name' => 'Fort Sutter',
			'population' => '1',
			'category_size' => 'small',
			'foundation' => '1839',
			'natives' => 'Maidu',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//37
		DB::table('towns')->insert([
			'town_name' => 'San Francisco',
			'population' => '1',
			'category_size' => 'mission',
			'foundation' => '1776',
			'natives' => 'Ohlone',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//38
		DB::table('towns')->insert([
			'town_name' => 'San Jose',
			'population' => '1',
			'category_size' => 'mission',
			'foundation' => '1777',
			'natives' => 'Ohlone',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//39
		DB::table('towns')->insert([
			'town_name' => 'Los Angeles',
			'population' => '1',
			'category_size' => 'mission',
			'foundation' => '1781',
			'natives' => 'Chumash',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//40
		DB::table('towns')->insert([
			'town_name' => 'San Diego',
			'population' => '1',
			'category_size' => 'mission',
			'foundation' => '1769',
			'natives' => 'Kumeyaay',
			'xcoord' => '1',
			'ycoord' => '1'
		]);

	}
}
