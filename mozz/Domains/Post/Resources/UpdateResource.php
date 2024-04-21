<?php

namespace Mozz\Domains\Post\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mozz\Support\Models\Post;

/**
 * @mixin Post
 */
final class UpdateResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
