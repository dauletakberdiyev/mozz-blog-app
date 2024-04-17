<?php

namespace Mozz\Support\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

trait ResponseTrait
{
    final public function response(string $message, mixed $data = null, int $status = ResponseAlias::HTTP_OK): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}
