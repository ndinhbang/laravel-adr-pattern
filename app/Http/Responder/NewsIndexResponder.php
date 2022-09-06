<?php

namespace App\Http\Responder;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class NewsIndexResponder {

    public function response(Collection $collection): \Illuminate\Http\JsonResponse
    {
        if ($collection->isNotEmpty()) {
            $data = [
                'status'    => Response::HTTP_OK,
                'data'      => $collection->toArray(),
            ];
        } else {
            $data = [
                'status'    => Response::HTTP_NOT_FOUND,
                'data'      => [],
            ];
        }
        return response()->json($data);
    }
}
