<?php

namespace Mozz\Domains\Post\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Mozz\Support\Models\Post;

final class Controller extends BaseController
{
    public function index(): JsonResponse
    {
        return response()->json(Post::all());
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
