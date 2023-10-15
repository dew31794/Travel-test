<?php

namespace App\Http\Requests\API;

use Illuminate\Support\Str;

class CurrencyRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'source'    =>  ['required', 'string', 'in:USD,TWD,JPY'],
            'target'    =>  ['required', 'string', 'in:USD,TWD,JPY'],
            'amount'    =>  ['required', 'string'],
        ];
    }

    /**
     * Individually verified callback messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'source.required'  => '請輸入幣別。',
            'source.string'    => '幣別請輸入英文字。',
            'source.in'        => '幣別不存在，請重新輸入。',

            'target.required'  => '請輸入幣別。',
            'target.string'    => '幣別請輸入英文字。',
            'target.in'        => '幣別不存在，請重新輸入。',

            'amount.required' => '請輸入金額。',
            'amount.string'   => '金額請輸入正確格式。',
        ];
    }
}
