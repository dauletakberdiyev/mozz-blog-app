<?php

namespace Mozz\Domains\Post\Handlers;

use Illuminate\Database\Eloquent\Collection;
use Mozz\Support\Models\Post;

final readonly class IndexHandler
{
    public function handle(): Collection
    {
        return Post::query()
            ->with(['author', 'tags'])
            ->where('is_visible', 1)
            ->get();
    }
}
