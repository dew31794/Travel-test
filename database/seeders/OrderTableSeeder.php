<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
use Str;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Order::truncate();
        Order::unguard();

        $datas = array(
            array(
                'bnb_id' => '2',
                'room_id' => '2',
                'currency' => 'TWD',
                'amount' => '1200',
                'check_in_date' => '2023-01-30',
                'check_out_date' => '2023-01-31',
                'created_at' => '2023-01-02 00:01:22'
            ),
            array(
                'bnb_id' => '2',
                'room_id' => '2',
                'currency' => 'USD',
                'amount' => '37.26',
                'check_in_date' => '2023-02-02',
                'check_out_date' => '2023-02-03',
                'created_at' => '2023-01-15 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '13500',
                'check_in_date' => '2023-05-01',
                'check_out_date' => '2023-05-04',
                'created_at' => '2023-04-15 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'USD',
                'amount' => '139.72',
                'check_in_date' => '2023-05-15',
                'check_out_date' => '2023-05-16',
                'created_at' => '2023-05-02 00:00:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '2',
                'currency' => 'TWD',
                'amount' => '3000',
                'check_in_date' => '2023-05-08',
                'check_out_date' => '2023-05-09',
                'created_at' => '2023-05-01 59:59:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '3',
                'currency' => 'JPY',
                'amount' => '14285.71',
                'check_in_date' => '2023-05-30',
                'check_out_date' => '2023-05-31',
                'created_at' => '2023-04-30 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '4500',
                'check_in_date' => '2023-05-21',
                'check_out_date' => '2023-05-22',
                'created_at' => '2023-05-10 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'JPY',
                'amount' => '21428.57',
                'check_in_date' => '2023-05-25',
                'check_out_date' => '2023-05-26',
                'created_at' => '2023-04-25 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '4500',
                'check_in_date' => '2023-05-27',
                'check_out_date' => '2023-05-28',
                'created_at' => '2023-05-20 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'USD',
                'amount' => '139.72',
                'check_in_date' => '2023-05-11',
                'check_out_date' => '2023-05-12',
                'created_at' => '2023-04-02 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '4500',
                'check_in_date' => '2023-06-11',
                'check_out_date' => '2023-06-12',
                'created_at' => '2023-05-15 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'USD',
                'amount' => '139.72',
                'check_in_date' => '2023-07-11',
                'check_out_date' => '2023-07-12',
                'created_at' => '2023-05-02 00:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'USD',
                'amount' => '139.72',
                'check_in_date' => '2023-08-11',
                'check_out_date' => '2023-08-12',
                'created_at' => '2023-05-31 59:01:22'
            ),
            array(
                'bnb_id' => '7',
                'room_id' => '1',
                'currency' => 'JPY',
                'amount' => '21428.57',
                'check_in_date' => '2023-08-01',
                'check_out_date' => '2023-08-02',
                'created_at' => '2023-07-02 00:01:22'
            ),
            
            array(
                'bnb_id' => '8',
                'room_id' => '2',
                'currency' => 'TWD',
                'amount' => '5000',
                'check_in_date' => '2023-05-01',
                'check_out_date' => '2023-05-02',
                'created_at' => '2023-04-27 00:01:22'
            ),
            array(
                'bnb_id' => '8',
                'room_id' => '1',
                'currency' => 'USD',
                'amount' => '99',
                'check_in_date' => '2023-05-04',
                'check_out_date' => '2023-05-05',
                'created_at' => '2023-04-21 00:01:22'
            ),
            array(
                'bnb_id' => '8',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '6000',
                'check_in_date' => '2023-05-01',
                'check_out_date' => '2023-05-03',
                'created_at' => '2023-03-02 00:01:22'
            ),
            array(
                'bnb_id' => '8',
                'room_id' => '2',
                'currency' => 'TWD',
                'amount' => '5000',
                'check_in_date' => '2023-05-30',
                'check_out_date' => '2023-05-31',
                'created_at' => '2023-01-02 00:01:22'
            ),
            array(
                'bnb_id' => '9',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '5000',
                'check_in_date' => '2023-05-04',
                'check_out_date' => '2023-05-06',
                'created_at' => '2023-04-22 00:01:22'
            ),
            array(
                'bnb_id' => '9',
                'room_id' => '3',
                'currency' => 'TWD',
                'amount' => '3500',
                'check_in_date' => '2023-05-25',
                'check_out_date' => '2023-05-26',
                'created_at' => '2023-05-17 00:01:22'
            ),
            array(
                'bnb_id' => '6',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '7000',
                'check_in_date' => '2023-05-11',
                'check_out_date' => '2023-05-12',
                'created_at' => '2023-03-23 00:01:22'
            ),
            array(
                'bnb_id' => '5',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '3800',
                'check_in_date' => '2023-05-11',
                'check_out_date' => '2023-05-12',
                'created_at' => '2023-05-10 00:01:22'
            ),
            
            array(
                'bnb_id' => '8',
                'room_id' => '2',
                'currency' => 'TWD',
                'amount' => '5000',
                'check_in_date' => '2023-01-01',
                'check_out_date' => '2023-01-02',
                'created_at' => '2022-11-30 00:01:22'
            ),
            array(
                'bnb_id' => '8',
                'room_id' => '1',
                'currency' => 'USD',
                'amount' => '99',
                'check_in_date' => '2023-02-04',
                'check_out_date' => '2023-02-05',
                'created_at' => '2023-01-07 00:01:22'
            ),
            array(
                'bnb_id' => '8',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '6000',
                'check_in_date' => '2023-01-01',
                'check_out_date' => '2023-01-03',
                'created_at' => '2022-12-01 00:01:22'
            ),
            array(
                'bnb_id' => '8',
                'room_id' => '2',
                'currency' => 'TWD',
                'amount' => '5000',
                'check_in_date' => '2023-10-30',
                'check_out_date' => '2023-10-31',
                'created_at' => '2023-06-18 00:01:22'
            ),
            array(
                'bnb_id' => '9',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '5000',
                'check_in_date' => '2023-08-04',
                'check_out_date' => '2023-08-06',
                'created_at' => '2023-06-22 00:01:22'
            ),
            array(
                'bnb_id' => '9',
                'room_id' => '3',
                'currency' => 'TWD',
                'amount' => '3500',
                'check_in_date' => '2023-07-25',
                'check_out_date' => '2023-07-26',
                'created_at' => '2023-05-31 00:01:22'
            ),
            array(
                'bnb_id' => '6',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '7000',
                'check_in_date' => '2023-08-11',
                'check_out_date' => '2023-08-12',
                'created_at' => '2023-06-30 00:01:22'
            ),
            array(
                'bnb_id' => '5',
                'room_id' => '1',
                'currency' => 'TWD',
                'amount' => '3800',
                'check_in_date' => '2023-08-11',
                'check_out_date' => '2023-08-12',
                'created_at' => '2023-07-31 00:01:22'
            ),
        );

        foreach ($datas as $data) {
            Order::create($data);
        }
    }
}
