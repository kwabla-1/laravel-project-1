<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreProjectRequest extends FormRequest
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
            'project_name' => 'required',
            'client_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'project_location' => 'required',
            'project_size' => 'required',
            'project_description' => 'required',
            'project_images[]' => [
                'nullable',
            ],
            'project_videos' => 'nullable'
        ];
    }
}
