<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComplinceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "full_name" => "required|regex:/^[\p{Arabic}]+(\s[\p{Arabic}]+){3}$/u",
            "ssn" => "required|digits:14",
            "product_id" => "required|exists:products,id",
            "shop_name" => "required",
            "government" => "required",
            "shop_address" => "required",
            "content" => "required",
        ];
    }

    public function messages(): array
    {
        return [

            "required" => "ادخل :attribute هنا",
            "full_name.regex" => "اكتب الاسم رباعي",
            "ssn.digits" => "ادخل رقم قومي مكون من 14 رقم",
            "product_id.exists" => "ادخل اسم منتج صحيح",
        ];
    }
    public function attributes(): array
    {
        return [

            "full_name" => "الاسم رباعي",
            "ssn" => "الرقم القومي",
            "government" => "المحافظة",
            "shop_name" => "العنوان",
            "shop_address" => "اسم المحل",
            "product_id" => "اسم المنتج",
            "content" => "محتوي الشكاوي",
        ];
    }
}
