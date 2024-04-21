<?php

namespace Mozz\Domains\Post\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mozz\Support\Models\Post;

/**
 * @mixin Post
 */
final class IndexResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'author' => new AuthorResource($this->author),
            'photo' => $this->photo,
            'is_visible' => $this->is_visible,
            'created_at' => $this->created_at->toDateTimeString(),
            'tags' => TagResource::collection($this->tags),
        ];
    }
}
