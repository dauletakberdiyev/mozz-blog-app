<?php

namespace Mozz\Domains\Post\DTO;

use Illuminate\Http\UploadedFile;

final readonly class CreateDTO
{
    public function __construct(
        public string $title,
        public int $authorId,
        public UploadedFile $photo,
    ) {
    }
}
