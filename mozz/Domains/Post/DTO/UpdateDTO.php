<?php

namespace Mozz\Domains\Post\DTO;

use Illuminate\Http\UploadedFile;

final readonly class UpdateDTO
{
    public function __construct(
        public ?string $title,
        public ?int $authorId,
        public ?array $tags,
        public ?UploadedFile $photo,
        public ?bool $isVisible,
    ) {
    }
}
