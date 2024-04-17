<?php

namespace Mozz\Domains\Post\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Mozz\Domains\Post\Handlers\IndexHandler;
use Mozz\Domains\Post\Resources\IndexResource;
use Mozz\Support\Models\Post;

final class Controller extends BaseController
{
    public function index(IndexHandler $handler): JsonResponse
    {
        return $this->response(
            self::translate('post.index'),
            IndexResource::collection($handler->handle())
        );
    }

    public function show(Post $post): JsonResponse
    {
        return $this->response(
            self::translate('post.show'),
            new IndexResource($post)
        );
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
