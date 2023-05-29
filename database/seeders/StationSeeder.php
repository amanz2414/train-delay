<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('stations')->insert([
                'id' =>1,
                'name' => '遅延路線',
                'line' => 'JR中央線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>2,
                'name' => '遅延路線',
                'line' => 'JR総武線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>3,
                'name' => '遅延路線',
                'line' => 'JR埼京線・川越線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>4,
                'name' => '遅延路線',
                'line' => 'JR横須賀線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>5,
                'name' => '遅延路線',
                'line' => 'JR京浜東北線・根岸線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>6,
                'name' => '遅延路線',
                'line' => 'JR東海道線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>7,
                'name' => '遅延路線',
                'line' => 'JR宇都宮線・高崎線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>8,
                'name' => '遅延路線',
                'line' => '東京メトロ千代田線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>9,
                'name' => '遅延路線',
                'line' => '東京メトロ東西線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>10,
                'name' => '遅延路線',
                'line' => '小田急線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>11,
                'name' => '遅延路線',
                'line' => 'JR中央線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>12,
                'name' => '遅延路線',
                'line' => 'JR総武線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>13,
                'name' => '遅延路線',
                'line' => 'JR埼京線・川越線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>14,
                'name' => '遅延路線',
                'line' => 'JR横須賀線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>15,
                'name' => '遅延路線',
                'line' => 'JR京浜東北線・根岸線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>16,
                'name' => '遅延路線',
                'line' => 'JR東海道線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>17,
                'name' => '遅延路線',
                'line' => 'JR宇都宮線・高崎線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>18,
                'name' => '遅延路線',
                'line' => '東京メトロ千代田線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>19,
                'name' => '遅延路線',
                'line' => '東京メトロ東西線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>20,
                'name' => '遅延路線',
                'line' => '小田急線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'id' =>21,
                'name' => '遅延路線',
                'line' => '小田急線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
