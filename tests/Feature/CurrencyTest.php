<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class CurrencyTest extends TestCase
{
    /**
     * 測試當前幣別是否存在
     * 
     */
    public function test_currency_list()
    {
        $response = $this->get('/api/v1/currency');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                'TWD',
                'USD',
                'JPY',
            ]
        ]);
    }

    /**
     * 測試「單筆」換匯是否正常
     * 
     */
    public function test_exchange_single_case()
    {
        $response = $this->get('/api/v1/currency/exchange?source=TWD&target=USD&amount=50000');

        $response->assertStatus(200);
        $response->assertJson([
                'msg' => 'success',
                'amount' => '$1,640.5'
        ]);
    }


    /**
     * 測試「多筆」換匯是否正常
     * 
     */
    #[DataProvider('dataProvider')]
    public function testCurrency($source, $target, $amount, $expected): void
    {
        $response = $this->get('/api/v1/currency/exchange?source=' . $source . '&target=' . $target . '&amount=' . $amount);
        $response->assertStatus(200);
        $response->assertJson([
            'msg' => 'success',
            'amount' => $expected
        ]);
    }

    public static function dataProvider()
    {
        return [
            ['TWD', 'USD', '$499', '$16.37'],
            ['JPY', 'USD', '$7,777', '$68.83'],
            ['JPY', 'TWD', '$988,888', '$266,564.65'],
        ];
    }
    
    /**
     * 測試幣別不存在
     * 
     */
    public function test_exchange_invalid_currency()
    {
        $response = $this->get('/api/v1/currency/exchange?source=TWD&target=CHF&amount=$999');

        $response->assertStatus(422);
        $response->assertJsonStructure([
            'ErrorMessage' => [
                'target'
            ]
        ]);
    }

    /**
     * 測試金額不可為負值
     * 
     */
    public function test_exchange_invalid_amount()
    {
        $response = $this->get('/api/v1/currency/exchange?source=TWD&target=USD&amount=$-100');

        $response->assertStatus(422);
        $response->assertJsonStructure([
            'ErrorMessage'
        ]);
    }
}
