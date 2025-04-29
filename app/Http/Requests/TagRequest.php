<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TagRequest extends FormRequest
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
        $tagId = $this->route('tag')?->id;
        return [
            'name' => [
                'required',
                'max:50',
                // 新規時は ignore(null) で全件チェック、更新時は自身の ID を無視
                Rule::unique('tags', 'name')->ignore($tagId),
            ],
        ];
    }
}
