<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'picture' => ['file', 'mimes:gif,png,jpg,webp', 'max:3072'],
            'sex' => ['string','nullable','max:255'],
            'age' => ['string','required','max:255'],
            'bio' =>['nullable', 'string','max:700'],
            'hobby' =>['string','nullable','max:700'],
            'height' =>['string', 'nullable', 'max:255'],
            'location' =>['string','nullable','max:255'],
            'college' =>['required','string', 'max:255'],
            'factory' =>['required','string', 'max:255'],
            'department' =>['required','string','max:255'],
            ''
        ];
    }
}
