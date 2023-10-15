<?php

namespace App\Services;

use App\Services\Service;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * 匯率
 */
class CurrencyService extends Service
{
    protected $currencies;
    protected $source;
    protected $target;
    protected $amount;
    /** 
     * 建構子
     * 
    **/
    public function __construct() {
        /* 取出預設轉換匯率 */
        $this->currencies = json_decode('{ "currencies": { "TWD": { "TWD": 1, "JPY": 3.669, "USD": 0.03281 }, "JPY": { "TWD": 0.26956, "JPY": 1, "USD": 0.00885 }, "USD": { "TWD": 30.444, "JPY": 111.801, "USD": 1 } } }', true)['currencies'];
    }

    /** 
     * 取得當前匯率列表
     * 
    **/
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /** 
     * 取得當前轉換匯率
     * 
    **/
    private function getCurrency()
    {
        return $this->currencies[$this->source][$this->target];
    }

    /** 
     * 設置當前幣別
     * 
    **/
    public function setSource($source)
    {
        if (!in_array($source, array_keys($this->currencies))) {
            throw new InvalidArgumentException();
        }
        $this->source = $source;

        return $this;
    }
    
    /** 
     * 設置轉換幣別
     * 
    **/
    public function setTarget($target)
    {
        if (!in_array($target, array_keys($this->currencies))) {
            throw new InvalidArgumentException();
        }
        $this->target = $target;

        return $this;
    }

    /** 
     * 將Amount進行格式化
     * 
    **/
    public function filterAmount($amount)
    {
        $this->amount = str_replace(',', '', str_replace('$', '', $amount));

        return $this;
    }

    /** 
     * 將Amount進行格式化
     * ※ 幣別符號驗證
     * 
    **/
    // public function filterAmount($source, $amount)
    // {
    //     $this->amount = str_replace(',', '', str_replace(config('money.currencies')[$source]['symbol'], '', $amount));

    //     return $this;
    // }

    /** 
     * 將Amount進行格式化 且判斷是否為數字、不得為負數
     * 
    **/
    public function ruleAmount($amount)
    {
        $current_amount = str_replace(',', '', str_replace('$', '', $amount));

        if(is_numeric($current_amount)){
            if($current_amount < 0){
                return "總金額只能輸入大於0";
            }
        }else{
            return "總金額只能為 $123,456 的格式。";
        }
    }

    /** 
     * 將Amount進行格式化 且判斷是否為數字、不得為負數
     * 增加判斷幣別符號是否正確
     * ※ 幣別符號驗證
    **/
    // public function ruleSymbol($source, $amount)
    // {
    //     $current_amount = str_replace(',', '', str_replace(config('money.currencies')[$source]['symbol'], '', $amount));

    //     if(is_numeric($current_amount)){
    //         if($current_amount < 0){
    //             return "總金額只能輸入大於0";
    //         }
    //     }else{
    //         return "格式不正確或幣別符號錯誤，請重新輸入。";
    //     }
    // }

    /** 
     * 轉換匯率
     * 
    **/
    public function exchangeCurrency()
    {
        $currency = $this->getCurrency();
        $amount = round($this->amount * $currency, 2);

        return $amount;
    }
    
    /**
     * 格式輸出
     * 
     */
    public function output($amount) {
        return "$".number_format($amount, strlen(substr(strrchr($amount, "."),1)));
    }

    /**
     * ※ 幣別符號驗證
     * 
     */
    // public function output($target, $amount) {
    //     return config('money.currencies')[$target]['symbol'].number_format($amount, strlen(substr(strrchr($amount, "."),1)));
    // }

    /**
     * 回傳結果
     * 
     */
    public function exchange($source, $target, $amount) 
    {
        $this->setSource($source);
        $this->setTarget($target);
        $this->filterAmount($amount);
        // ※ 幣別符號驗證
        // $this->filterAmount($source,$amount);

        $exchangAmount = $this->exchangeCurrency();

        return $this->output($exchangAmount);
        // ※ 幣別符號驗證
        // return $this->output($target, $exchangAmount);
    }
}