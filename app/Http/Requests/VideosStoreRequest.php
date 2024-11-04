<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class VideosStoreRequest extends FormRequest
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
            'name' => ['required'],
            'url' => ['required'],
            'thumbnail' => ['required'],
            'length' => ['required','int'],
            'slug' => ['required','unique:videos,slug','alpha_dash'],
            'description' => ['required'],
            'category_id' => ['int']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'فیلد نام الزامی است',
            'url.required' => 'فیلد آدرس الزامی است',
            'thumbnail.required' => 'فیلد تصویر الزامی است',
            'length.required' => 'فیلد ',
            'slug.required' => '',
            'slug.unique' => '',
            'description.required' => '',
        ];
    }

    public function prepareForValidation()
    {
        return [
            'slug' => Str::slug($this->slug)
        ];
    }
}
