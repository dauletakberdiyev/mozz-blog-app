<?php

namespace Mozz\Domains\Post\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mozz\Support\Models\Tag;

/**
 * @mixin Tag
 */
final class TagResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
