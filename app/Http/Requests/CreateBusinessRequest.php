<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBusinessRequest extends FormRequest
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
            'business_name' => 'required|unique:businesses,business_name|max:255',
            'business_location' => 'required|max:255',
            'business_phone_number' => 'required|unique:businesses,business_phone_number',
            'website_link' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
        ];
    }
}
