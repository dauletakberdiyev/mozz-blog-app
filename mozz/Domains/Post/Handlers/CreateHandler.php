<?php

namespace Mozz\Domains\Post\Handlers;

use Illuminate\Support\Facades\DB;
use Mozz\Domains\Post\DTO\CreateDTO;
use Mozz\Support\Models\Post;

final readonly class CreateHandler
{
    public function handle(CreateDTO $dto): Post
    {
        $post = new Post();

        DB::transaction(function () use ($post, $dto) {
            $post->title = $dto->title;
            $post->user_id = $dto->authorId;

            $path = $dto->photo->store('images', 'public');
            $post->photo = $path;

            $post->save();
        });

        return $post;
    }
}
