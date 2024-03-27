<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => "required|regex:/^[\p{Arabic}]{4,25}$/u",
            'img_cover' =>"required|image"
        ];
    }

    public function messages(): array
    {
        return [
            "required" => "ادخل :attribute هنا",
            "name.regex" => "اكتب اسم القسم بشكل صحيح",
            "img_cover.image" => "اختر صورة بشكل صحيح",
        ];
    }

    public function attributes(): array
    {
        return [

            "name" => "اسم القسم",
            "img_cover" => "صورة القسم",
        ];
    }

}
