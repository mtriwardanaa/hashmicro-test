<?php

namespace Modules\Percentage\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePercentage extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'input1' => 'required|string|min:2',
            'input2' => 'required|string|min:2',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
