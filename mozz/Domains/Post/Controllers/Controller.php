<?php

namespace Mozz\Domains\Post\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Mozz\Domains\Post\Resources\IndexResource;
use Mozz\Support\Models\Post;

final class Controller extends BaseController
{
    public function index(): JsonResponse
    {
        $posts = Post::query()
            ->with('author')
            ->get();

        return $this->response(
            self::translate('post.index'),
            IndexResource::collection($posts)
        );
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
