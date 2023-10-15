<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
use Str;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Room::truncate();
        Room::unguard();

        $datas = array(
            array(
                'bnb_id' => '1',
                'name' => '標準雙人房－附陽台和浴缸',
            ),
            array(
                'bnb_id' => '1',
                'name' => '豪華雙人房－附陽台和浴缸',
            ),
            array(
                'bnb_id' => '1',
                'name' => '豪華海景雙人房－附陽台和浴缸',
            ),
            array(
                'bnb_id' => '1',
                'name' => '海景豪華雙床房',
            ),
            array(
                'bnb_id' => '1',
                'name' => '豪華雙人房－附浴缸',
            ),
            array(
                'bnb_id' => '2',
                'name' => '海景加大雙人床房',
            ),
            array(
                'bnb_id' => '2',
                'name' => '海景家庭房',
            ),
            array(
                'bnb_id' => '2',
                'name' => '海景四人房',
            ),
            array(
                'bnb_id' => '2',
                'name' => '海景雙人房－附陽台',
            ),
            array(
                'bnb_id' => '2',
                'name' => '家庭房－附陽台',
            ),
            array(
                'bnb_id' => '3',
                'name' => '山景豪華房 (Deluxe Mountain View)',
            ),
            array(
                'bnb_id' => '3',
                'name' => '加大雙人床房 (Queen Room)',
            ),
            array(
                'bnb_id' => '3',
                'name' => '雙人房 (Double Room - Non Pet Friendly)',
            ),
            array(
                'bnb_id' => '3',
                'name' => '豪華房2 (Deluxe 2)',
            ),
            array(
                'bnb_id' => '3',
                'name' => '四人房-附露臺 (Quadruple Room with Terrace)',
            ),
            array(
                'bnb_id' => '3',
                'name' => '豪華雙人房（2 位成人 + 1 名兒童） (Deluxe Double Room (2 Adults + 1 Child))',
            ),
            array(
                'bnb_id' => '3',
                'name' => '雙人房 - 有陽台 (Double Balcony)',
            ),
            array(
                'bnb_id' => '4',
                'name' => '豪華雙人房－附陽台',
            ),
            array(
                'bnb_id' => '4',
                'name' => '豪華四人房',
            ),
            array(
                'bnb_id' => '5',
                'name' => '雙人房',
            ),
            array(
                'bnb_id' => '5',
                'name' => '湖景雙人房',
            ),
            array(
                'bnb_id' => '5',
                'name' => '山景雙人房',
            ),
            array(
                'bnb_id' => '5',
                'name' => '高級四人房',
            ),
            array(
                'bnb_id' => '5',
                'name' => '高級三人房',
            ),
            array(
                'bnb_id' => '5',
                'name' => '樓中樓四人房',
            ),
            array(
                'bnb_id' => '6',
                'name' => '山景雙人房',
            ),
            array(
                'bnb_id' => '6',
                'name' => '山景家庭房',
            ),
            array(
                'bnb_id' => '6',
                'name' => '雙人房－附私人衛浴',
            ),
            array(
                'bnb_id' => '6',
                'name' => '雙人房－附私人衛浴',
            ),
            array(
                'bnb_id' => '6',
                'name' => '高級四人房',
            ),
            array(
                'bnb_id' => '7',
                'name' => '雙人房',
            ),
            array(
                'bnb_id' => '7',
                'name' => '四人房',
            ),
            array(
                'bnb_id' => '7',
                'name' => '嘗試移民',
            ),
            array(
                'bnb_id' => '8',
                'name' => '街景雙人房－附陽台',
            ),
            array(
                'bnb_id' => '8',
                'name' => '山景雙人房－附陽台',
            ),
            array(
                'bnb_id' => '9',
                'name' => '水月湖villa',
            ),
            array(
                'bnb_id' => '9',
                'name' => '綠鑽石villa',
            ),
            array(
                'bnb_id' => '9',
                'name' => '空中鏡面屋villa',
            ),
            array(
                'bnb_id' => '9',
                'name' => '水間玻璃屋villa',
            ),
            // array(
            //     'bnb_id' => '10',
            //     'name' => '青石房 Sapphire Room',
            // ),
            // array(
            //     'bnb_id' => '10',
            //     'name' => '紋石房 Marble Room',
            // ),
            // array(
            //     'bnb_id' => '10',
            //     'name' => '紅石房 Ruby Room',
            // ),
            // array(
            //     'bnb_id' => '10',
            //     'name' => '金石房 Gold Room',
            // ),
            // array(
            //     'bnb_id' => '10',
            //     'name' => '白石房 Crystal Room',
            // )
        );

        foreach ($datas as $data) {
            Room::create($data);
        }
    }
}
