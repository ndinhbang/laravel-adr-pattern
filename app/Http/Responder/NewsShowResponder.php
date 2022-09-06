<?php

namespace App\Http\Responder;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

class NewsShowResponder {

    public function response(?Model $model): \Illuminate\Http\JsonResponse
    {
        if (is_null($model)) {
            $data = [
                'status'    => Response::HTTP_NOT_FOUND,
                'data'      => [],
            ];
        } else {
            $data = [
                'status'    => Response::HTTP_OK,
                'data'      => $model->toArray(),
            ];
        }
        return response()->json($data);
    }
}
