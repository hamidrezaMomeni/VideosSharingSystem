<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class VideosUpdateRequest extends VideosStoreRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = array_merge(parent::rules(), [
            'slug' => ['required',Rule::unique('videos', 'slug')->ignore($this->video), 'alpha_dash']
        ]);
        return $rules;
    }

    public function messages(): array
    {
        return array_merge(parent::messages(), [
            'slug.unique' => 'فیلد نام یکتا تکراری است'
        ]);
    }
}
