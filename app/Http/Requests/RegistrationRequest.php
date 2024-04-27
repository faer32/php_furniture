<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\password;

class RegistrationRequest extends FormRequest
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
            'password' => 'confirmed'
        ];
    }
    // изменение сообщения об ошибке
    public function messages()
    {
        return [
            'password.confirmed' => 'Пароли не совпадают'
        ];
    }
}
