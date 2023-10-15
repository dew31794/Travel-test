<?php

namespace App\Http\Controllers\API;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\CurrencyService;
use App\Http\Requests\API\CurrencyRequest;

class CurrencyController extends ApiController
{
    /**
     * 建構子
     * 
     */
    public function __construct(CurrencyService $service)
    {
        $this->service = $service;
    }

    /**
     * 轉換匯率
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $currencies = $this->service->getCurrencies();
    
            return response()->json([
                "msg"       =>  "success",
                "data"      =>  $currencies
            ], 200);
            // return response()->json([
            //     "data"      =>  $currencies
            // ], 200);
        }catch(Exception $e){
            $message = "發生未知的錯誤：".$e->getMessage();
            $status_code = 500;

            return response()->json([
                'Status' => 'Failure',
                'ErrorMessage' => $message,
                'Code' => 500,
                'TimeStamp' => Carbon::now()->format('Y-m-d\TH:i:s.uP T')
            ], 500);
        }
    }
    
    /**
     * 轉換匯率
     *
     * @return \Illuminate\Http\Response
     */
    public function exchange(CurrencyRequest $request)
    {
        try{
            // 驗證總金額只能為數字及正數
            if($errors = $this->service->ruleAmount($request->amount)){
                return response()->json([
                    'Status' => 'Failure',
                    'ErrorMessage' => $errors,
                    'Code' => 422
                ], 422);
            };

            $amount = $this->service->exchange(
                $request->source, 
                $request->target, 
                $request->amount
            );
    
            return response()->json([
                "msg"       =>  "success",
                "amount"    =>  $amount
            ], 200);
        }catch(Exception $e){
            $message = "發生未知的錯誤：".$e->getMessage();
            $status_code = 500;

            return response()->json([
                'Status' => 'Failure',
                'ErrorMessage' => $message,
                'Code' => 500,
                'TimeStamp' => Carbon::now()->format('Y-m-d\TH:i:s.uP T')
            ], 500);
        }
    }
}
