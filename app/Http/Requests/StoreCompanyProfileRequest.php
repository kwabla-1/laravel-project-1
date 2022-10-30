<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyProfileRequest extends FormRequest
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
            'company_name' => ['required'],
            'postal_addres' => ['required'],
            'location' => ['required'],
            'contact_person' => ['required'],
            'mobile_number' => ['required'],
            'mobile_number1' => ['required'],
            'company_website' => ['required '],
            'comperate_email' => ['required','email'],
            'company_profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,JPG,JPEG,PNG'],
            'company_services' => ['required'],
            'business_type' => ['required'],
            'business_type' => ['required'],    
            'est_year' => ['date'],
            'numberofworkers' => ['required'],
            'company_size' => ['required'],
            'working_day' => ['required'],
            'cert1' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'cert2' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'cert3' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'license1' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'license2' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'license3' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
        ];
    }
}
