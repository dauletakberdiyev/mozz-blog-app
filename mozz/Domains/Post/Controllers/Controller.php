<?php

namespace Mozz\Domains\Post\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Mozz\Domains\Post\Handlers\CreateHandler;
use Mozz\Domains\Post\Handlers\IndexHandler;
use Mozz\Domains\Post\Handlers\UpdateHandler;
use Mozz\Domains\Post\Requests\CreateRequest;
use Mozz\Domains\Post\Requests\UpdateRequest;
use Mozz\Domains\Post\Resources\CreateResource;
use Mozz\Domains\Post\Resources\IndexResource;
use Mozz\Domains\Post\Resources\UpdateResource;
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

    public function create(CreateRequest $request, CreateHandler $handler): JsonResponse
    {
        return $this->response(
            self::translate('post.create'),
            new CreateResource($handler->handle($request->getDTO()))
        );
    }

    public function update(UpdateRequest $request, Post $post, UpdateHandler $handler): JsonResponse
    {
        return $this->response(
            self::translate('post.update'),
            new UpdateResource($handler->handle($request->getDTO(), $post))
        );
    }

    public function delete(Post $post): JsonResponse
    {
        return $this->response(
            self::translate('post.delete'),
            $post->delete()
        );
    }
}
