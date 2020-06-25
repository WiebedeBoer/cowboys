<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //foreign keys
		$this->call('ForeignKeySeeder');
		//towns seeds
        $this->call('TownSeeder');
		//towns seeds
        $this->call('BuildingTypeSeeder');
    }
}

//foreign keys
class ForeignKeySeeder extends Seeder
{
    public function run()
    {
        //buildings fk
		Schema::table('buildings', function (Blueprint $table) {
			$table->foreign('type')->references('building_type_id')->on('building_types');
            $table->foreign('town')->references('town_id')->on('towns');
        });	
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
			'category_size' => 'outpost',
			'foundation' => '1610',
			'natives' => 'Pueblo',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//2
		DB::table('towns')->insert([
			'town_name' => 'Alburquerque',
			'population' => '1',
			'category_size' => 'outpost',
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
			'category_size' => 'outpost',
			'foundation' => '1659',
			'natives' => 'Commanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//4
		DB::table('towns')->insert([
			'town_name' => 'Austin',
			'population' => '1',
			'category_size' => 'buffalo',
			'foundation' => '1835',
			'natives' => 'Comanche',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//5
		DB::table('towns')->insert([
			'town_name' => 'Dallas',
			'population' => '1',
			'category_size' => 'buffalo',
			'foundation' => '1856',
			'natives' => 'Caddo',
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
			'category_size' => 'port',
			'foundation' => '1837',
			'natives' => 'Karankawa',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//8
		DB::table('towns')->insert([
			'town_name' => 'San Antonio',
			'population' => '1',
			'category_size' => 'mission',
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
			'category_size' => 'mining',
			'foundation' => '1858',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//10
		DB::table('towns')->insert([
			'town_name' => 'Colorado Springs',
			'population' => '1',
			'category_size' => 'mining',
			'foundation' => '1886',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//11
		DB::table('towns')->insert([
			'town_name' => 'Fort Pueblo',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1842',
			'natives' => 'Cheyenne',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//oklahoma
		//12
		DB::table('towns')->insert([
			'town_name' => 'Oklahoma',
			'population' => '1',
			'category_size' => 'stockyard',
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
			'category_size' => 'stockyard',
			'foundation' => '1868',
			'natives' => 'Wichita',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//14
		DB::table('towns')->insert([
			'town_name' => 'Kansas',
			'population' => '1',
			'category_size' => 'outpost',
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
			'category_size' => 'buffalo',
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
			'category_size' => 'mining',
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
			'category_size' => 'stockyard',
			'foundation' => '1872',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//20
		DB::table('towns')->insert([
			'town_name' => 'Fargo',
			'population' => '1',
			'category_size' => 'outpost',
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
			'category_size' => 'outpost',
			'foundation' => '1877',
			'natives' => 'Crow',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//22
		DB::table('towns')->insert([
			'town_name' => 'Bozeman',
			'population' => '1',
			'category_size' => 'stockyard',
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
			'category_size' => 'stockyard',
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
			'category_size' => 'mining',
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
			'category_size' => 'stockyard',
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
			'category_size' => 'outpost',
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
			'category_size' => 'outpost',
			'foundation' => '1873',
			'natives' => 'Spokane',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//33
		DB::table('towns')->insert([
			'town_name' => 'Seattle',
			'population' => '1',
			'category_size' => 'lumber',
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
			'category_size' => 'port',
			'foundation' => '1845',
			'natives' => 'Chinook',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//35
		DB::table('towns')->insert([
			'town_name' => 'Eugene',
			'population' => '1846',
			'category_size' => 'outpost',
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
			'category_size' => 'fort',
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
		//louisiana
		//41
		DB::table('towns')->insert([
			'town_name' => 'New Orleans',
			'population' => '1',
			'category_size' => 'port',
			'foundation' => '1718',
			'natives' => 'Natchez',
			'xcoord' => '1',
			'ycoord' => '1'
		]);		
		//42
		DB::table('towns')->insert([
			'town_name' => 'Shreveport',
			'population' => '1',
			'category_size' => 'port',
			'foundation' => '1836',
			'natives' => 'Caddo',
			'xcoord' => '1',
			'ycoord' => '1'
		]);	
		//arkansas
		//43
		DB::table('towns')->insert([
			'town_name' => 'Fayetteville',
			'population' => '1',
			'category_size' => 'outpost',
			'foundation' => '1828',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);	
		//44
		DB::table('towns')->insert([
			'town_name' => 'Little Rock',
			'population' => '1',
			'category_size' => 'outpost',
			'foundation' => '1821',
			'natives' => 'Caddo',
			'xcoord' => '1',
			'ycoord' => '1'
		]);			
		//missouri
		//45
		DB::table('towns')->insert([
			'town_name' => 'Saint Louis',
			'population' => '1',
			'category_size' => 'port',
			'foundation' => '1764',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);	
		//46
		DB::table('towns')->insert([
			'town_name' => 'Columbia',
			'population' => '1',
			'category_size' => 'outpost',
			'foundation' => '1818',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);	
		//47
		DB::table('towns')->insert([
			'town_name' => 'Springfield',
			'population' => '1',
			'category_size' => 'outpost',
			'foundation' => '1834',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);		
		//iowa
		//48
		DB::table('towns')->insert([
			'town_name' => 'Fort Des Moines',
			'population' => '1',
			'category_size' => 'fort',
			'foundation' => '1843',
			'natives' => 'Algonquin',
			'xcoord' => '1',
			'ycoord' => '1'
		]);	
		//49
		DB::table('towns')->insert([
			'town_name' => 'Cedar Rapids',
			'population' => '1',
			'category_size' => 'stockyard',
			'foundation' => '1849',
			'natives' => 'Algonquin',
			'xcoord' => '1',
			'ycoord' => '1'
		]);			
		//minnesota
		//50
		DB::table('towns')->insert([
			'town_name' => 'Minneapolis',
			'population' => '1',
			'category_size' => 'lumber',
			'foundation' => '1867',
			'natives' => 'Sioux',
			'xcoord' => '1',
			'ycoord' => '1'
		]);	
	}
}

class BuildingTypeSeeder extends Seeder
{	
	//towns
    public function run()
    {
		//transport
		//1
		DB::table('building_types')->insert([
			'type_name' => 'railroad station',
			'category' => 'transport'
		]);
		//2
		DB::table('building_types')->insert([
			'type_name' => 'stagecoach station',
			'category' => 'transport'
		]);
		//3
		DB::table('building_types')->insert([
			'type_name' => 'livery stables',
			'category' => 'transport'
		]);	
		//4
		DB::table('building_types')->insert([
			'type_name' => 'post office',
			'category' => 'transport'
		]);
		//5
		DB::table('building_types')->insert([
			'type_name' => 'telegraph office',
			'category' => 'transport'
		]);
		//6
		DB::table('building_types')->insert([
			'type_name' => 'newspaper',
			'category' => 'transport'
		]);
		//security
		//7
		DB::table('building_types')->insert([
			'type_name' => 'fort',
			'category' => 'security'
		]);
		//8
		DB::table('building_types')->insert([
			'type_name' => 'sheriff office',
			'category' => 'security'
		]);
		//9
		DB::table('building_types')->insert([
			'type_name' => 'marshall office',
			'category' => 'security'
		]);
		//10
		DB::table('building_types')->insert([
			'type_name' => 'jail',
			'category' => 'security'
		]);
		//11
		DB::table('building_types')->insert([
			'type_name' => 'firehouse',
			'category' => 'security'
		]);
		//12
		DB::table('building_types')->insert([
			'type_name' => 'court',
			'category' => 'security'
		]);
		//commerce
		//13
		DB::table('building_types')->insert([
			'type_name' => 'feed store',
			'category' => 'commerce'
		]);
		//14
		DB::table('building_types')->insert([
			'type_name' => 'general store',
			'category' => 'commerce'
		]);
		//15
		DB::table('building_types')->insert([
			'type_name' => 'dry goods store',
			'category' => 'commerce'
		]);
		//16
		DB::table('building_types')->insert([
			'type_name' => 'tailor',
			'category' => 'commerce'
		]);		
		//17
		DB::table('building_types')->insert([
			'type_name' => 'blacksmith',
			'category' => 'commerce'
		]);
		//18
		DB::table('building_types')->insert([
			'type_name' => 'gunsmith',
			'category' => 'commerce'
		]);
		//19
		DB::table('building_types')->insert([
			'type_name' => 'assay office',
			'category' => 'commerce'
		]);
		//20
		DB::table('building_types')->insert([
			'type_name' => 'bank',
			'category' => 'commerce'
		]);
		//industry
		//21
		DB::table('building_types')->insert([
			'type_name' => 'icehouse',
			'category' => 'industry'
		]);
		//22
		DB::table('building_types')->insert([
			'type_name' => 'stockyard',
			'category' => 'industry'
		]);
		//23
		DB::table('building_types')->insert([
			'type_name' => 'abattoir',
			'category' => 'industry'
		]);
		//health
		//24
		DB::table('building_types')->insert([
			'type_name' => 'barber shop',
			'category' => 'health'
		]);
		//25
		DB::table('building_types')->insert([
			'type_name' => 'bath house',
			'category' => 'health'
		]);
		//26
		DB::table('building_types')->insert([
			'type_name' => 'laundry',
			'category' => 'health'
		]);
		//27
		DB::table('building_types')->insert([
			'type_name' => 'doctor',
			'category' => 'health'
		]);
		//religious
		//28
		DB::table('building_types')->insert([
			'type_name' => 'church',
			'category' => 'religious'
		]);
		//29
		DB::table('building_types')->insert([
			'type_name' => 'funeral store',
			'category' => 'religious'
		]);
		//education
		//30
		DB::table('building_types')->insert([
			'type_name' => 'school',
			'category' => 'education'
		]);
		//31
		DB::table('building_types')->insert([
			'type_name' => 'college',
			'category' => 'education'
		]);
		//entertainment
		//32
		DB::table('building_types')->insert([
			'type_name' => 'saloon',
			'category' => 'entertainment'
		]);
		//33
		DB::table('building_types')->insert([
			'type_name' => 'dance hall',
			'category' => 'entertainment'
		]);
		//34
		DB::table('building_types')->insert([
			'type_name' => 'hotel',
			'category' => 'entertainment'
		]);
		//resources
		//35
		DB::table('building_types')->insert([
			'type_name' => 'mine',
			'category' => 'resources'
		]);
		//36
		DB::table('building_types')->insert([
			'type_name' => 'trapper',
			'category' => 'resources'
		]);
		//37
		DB::table('building_types')->insert([
			'type_name' => 'sawmill',
			'category' => 'resources'
		]);
		//farming
		//38
		DB::table('building_types')->insert([
			'type_name' => 'farm',
			'category' => 'farming'
		]);
		//39
		DB::table('building_types')->insert([
			'type_name' => 'plantation',
			'category' => 'farming'
		]);
		//40
		DB::table('building_types')->insert([
			'type_name' => 'ranch',
			'category' => 'farming'
		]);	
		//41
		DB::table('building_types')->insert([
			'type_name' => 'mill',
			'category' => 'farming'
		]);	
		//42
		DB::table('building_types')->insert([
			'type_name' => 'water tower',
			'category' => 'farming'
		]);			
	}
}
