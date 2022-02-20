<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jeep types
        //1
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Wrangler', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //2
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Grand Cherokee', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //3
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Cherokee', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //4
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Compass', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //5
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Sport', 
            'rel_type' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //6
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '2D', 
            'rel_type' => '5',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //7
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '4D', 
            'rel_type' => '5',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //8
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Sahara', 
            'rel_type' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //9
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '2D', 
            'rel_type' => '6',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //10
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '4D', 
            'rel_type' => '6',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //11
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Rubican', 
            'rel_type' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //12
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '2D', 
            'rel_type' => '7',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //13
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '4D', 
            'rel_type' => '7',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //14
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Laredo', 
            'rel_type' => '2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //15
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '2L', 
            'rel_type' => '14',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //16
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => '4L', 
            'rel_type' => '14',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //17
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Limited', 
            'rel_type' => '2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //18
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Summit', 
            'rel_type' => '2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //19
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Sport', 
            'rel_type' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //20
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Longitude', 
            'rel_type' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //21
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Trailhawk', 
            'rel_type' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //22
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Limited', 
            'rel_type' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //23
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Longitude', 
            'rel_type' => '4',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //24
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Trailhawk', 
            'rel_type' => '4',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //25
        DB::table('types')->insert([
            'brand_id' => '1',
            'name' => 'Limited', 
            'rel_type' => '4',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // Audi types
        //26
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A1', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //27
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A3', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //28
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A4', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //29
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A5', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //30
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S-line', 
            'rel_type' => '29',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //31
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Standard', 
            'rel_type' => '29',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //32
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A6', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //33
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A7', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //34
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A8', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //35
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A8', 
            'rel_type' => '34',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //36
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'A8-L', 
            'rel_type' => '34',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //37
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Q2', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //38
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Q3', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //39
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Q5', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //40
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S-line', 
            'rel_type' => '39',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //41
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Standard', 
            'rel_type' => '39',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //42
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Q7', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //43
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'Q8', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //44
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'R8', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //45
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S3/RS3', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //46
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S4/RS4', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //47
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S5/RS5', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //48
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S6/RS6', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //49
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S7/RS7', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //50
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'S8', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //51
        DB::table('types')->insert([
            'brand_id' => '2',
            'name' => 'TT', 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
