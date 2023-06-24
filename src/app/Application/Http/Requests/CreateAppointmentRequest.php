<?php

namespace App\Application\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'        => 'required|string|max:100',
            'phone'       => 'required|numeric|digits:11',
            'email'       => 'required|email|max:100',
            'date'        => 'required|date',
            'doctor'      => 'required|string',
            'department'  => 'required|string',
            'message'     => 'required|string'
        ];
    }
}
