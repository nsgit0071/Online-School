<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NavRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'logo' => 'nullable|image|max:10240',
            'first_link' => "required ",
            'second_link' => "required ",
            'third_link' => "required ",
            'fourth_link' => "required ",
            'fifth_link' => "required ",
            'sixth_link'  => "required ",
            'phone_number' => "required ",
        ];
    }
}
