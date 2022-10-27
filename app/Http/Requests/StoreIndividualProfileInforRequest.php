<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIndividualProfileInforRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'mobile1' => ['required'],
            'mobile2' => ['required'],
            'country' => ['required'],
            "location" => ['required'],
            "address" => ['required'],
            "profile_picture" => ['nullable', 'image', 'mimes:jpeg,png,jpg,JPG,JPEG,PNG'],
            "date_of_birth" => ['required', 'date'],
            "career_commence" => ['required', 'date'],
            "profession" => ['required'],
            "school_name" => ['required'],
            "completion_name" => ['required', 'date'],
            "myself" => ['required'],
            "school_cert" => ['nullable'],
            "cert" => ['nullable'],
            "cert1" => ['nullable'],
        ];
    }
}
