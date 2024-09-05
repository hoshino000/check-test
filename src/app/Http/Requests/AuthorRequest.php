<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|email|max:255',
            'tel-part1' => 'required|numeric|digits:3',
            'tel-part2' => 'required|numeric|digits:4',
            'tel-part3' => 'required|numeric|digits:4',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'detail' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'first_name.required' => '性別を選択してください',
            'first_name.required' => 'メールアドレスを入力してください',
            'first_name.email' => 'メールアドレスはメール形式で入力してください',
            'tel-part1.required' => '電話番号を入力してください',
            'tel-part1.digits' => '電話番号は4桁以下の数字で入力してください',
            'tel-part2.required' => '電話番号を入力してください',
            'tel-part2.digits' => '電話番号は4桁以下の数字で入力してください',
            'tel-part3.required' => '電話番号を入力してください',
            'tel-part3.digits' => '電話番号は4桁以下の数字で入力してください',
            'address.required' => '住所を入力してください',
            'building.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120字以内で入力してください',
        ];
    }
}
