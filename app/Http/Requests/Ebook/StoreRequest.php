<?php

declare(strict_types=1);

namespace App\Http\Requests\Ebook;

use Illuminate\Foundation\Http\FormRequest;

final class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'max:255',
            ],
            'description' => [
                'required',
                'max:300',
            ],
            'amount' => [
                'required',
                'numeric',
                'gt:0',
            ],
        ];
    }
}
