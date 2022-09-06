<?php

namespace App\Http\Actions\News;

use App\Http\Controllers\Controller;
use App\Http\Responder\NewsShowResponder;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsShowAction extends Controller
{
    protected NewsService $service;
    protected NewsShowResponder $responder;

    public function __construct(NewsService $service, NewsShowResponder $responder) {
        $this->service = $service;
        $this->responder = $responder;
    }

    public function __invoke(Request $request, int $id)
    {
        return $this->responder->response(
            $this->service->find($id)
        );
    }
}
