<?php

namespace Mozz\Domains\Post\Handlers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mozz\Domains\Post\DTO\UpdateDTO;
use Mozz\Support\Models\Post;
use Mozz\Support\Models\Tag;

final readonly class UpdateHandler
{
    public function handle(UpdateDTO $dto, Post $post): Post
    {
        DB::transaction(function () use ($dto, $post) {
            $post->user_id = $dto->authorId;
            if ($dto->title) $post->title = $dto->title;
            if ($dto->photo)
            {
                if (Storage::exists($post->photo)) Storage::delete($post->photo);

                $path = $dto->photo->store('images', 'public');
                $post->photo = $path;
            }
            if ($dto->isVisible) $post->is_visible = $dto->isVisible;
            if ($dto->tags)
            {
                foreach ($dto->tags as $tag)
                {
                    $tag = Tag::query()->find((int) $tag);
                    $post->tags()->attach($tag);
                }
            }

            $post->updated_at = Carbon::now();
            $post->save();
        });

        return $post;
    }
}
