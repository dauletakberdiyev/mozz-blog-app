<?php

namespace Mozz\Domains\Post\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;
use Mozz\Domains\Post\DTO\UpdateDTO;
use Mozz\Support\Models\Tag;

final class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'integer', new Exists(Tag::class, 'id')],
            'photo' => ['nullable', 'file', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'is_visible' => ['nullable', 'boolean'],
        ];
    }

    public function getDTO(): UpdateDTO
    {
        return new UpdateDTO(
            $this->validated('title'),
            (int) 1,
            $this->validated('tags', []),
            $this->file('photo'),
            $this->validated('is_visible'),
        );
    }
}
