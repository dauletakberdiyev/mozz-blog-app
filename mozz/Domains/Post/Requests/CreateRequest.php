<?php

namespace Mozz\Domains\Post\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mozz\Domains\Post\DTO\CreateDTO;

final class CreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg', 'max:2048']
        ];
    }

    public function getDTO(): CreateDTO
    {
        return new CreateDTO(
            $this->validated('title'),
            (int) 1,
            $this->file('photo'),
        );
    }
}
