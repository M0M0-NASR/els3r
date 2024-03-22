<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "name" => "required|regex:/^[\p{Arabic}]+(\s[\p{Arabic}]+){3}$/u",
            "description" => "required",
            "category_id" => "required|exists:categories,id",
            "img_cover" => "required|image",
            "current_price" => "required|numeric",
            
        ];
    }
    public function messages(): array
    {
        return [

            "required" => "ادخل :attribute هنا",
            "name.regex" => "اكتب اسم المنتج بشكل صحيح",
            "current_price" => "ادخل السعر بشكل صحيح",
            "category.exists" => "اختر القسم بشكل صحيح",
            "img_cover.image" => "اختر صورة بشكل صحيح",
        ];
    }

    public function attributes(): array
    {
        return [

            "name" => "اسم المنتج",
            "description" => "الوصف",
            "category_id" => "القسم",
            "img_cover" => "صورة للمنتج",
            "current_price" => "سعر المنتج",
        ];
    }
}
