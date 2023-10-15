<?php

namespace Database\Seeders;

use App\Models\Bnb;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
use Str;

class BnbTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Bnb::truncate();
        Bnb::unguard();

        $datas = array(
            array(
                'name' => 'SEA民宿',
            ),
            array(
                'name' => '貳館海景民宿',
            ),
            array(
                'name' => 'W House 民宿',
            ),
            array(
                'name' => '瑞穗山下的厝溫泉民宿',
            ),
            array(
                'name' => '靜樹湖',
            ),
            array(
                'name' => '迴音谷森林民宿',
            ),
            array(
                'name' => '依山午 afternoon resort',
            ),
            array(
                'name' => '漫漫日出 Before Sunrise',
            ),
            array(
                'name' => '後湖水月度假別墅',
            ),
            array(
                'name' => '梯田山民宿',
            )
        );

        foreach ($datas as $data) {
            Bnb::create($data);
        }


        for($i=1;$i<100000;$i++){
            Bnb::create(['name' => '民宿'.$i]);
        }
    }
}
