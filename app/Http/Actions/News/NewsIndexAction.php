<?php

namespace App\Http\Actions\News;

use App\Http\Controllers\Controller;
use App\Http\Responder\NewsIndexResponder;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsIndexAction extends Controller
{
    protected NewsService $service;
    protected NewsIndexResponder $responder;

    public function __construct(NewsService $service, NewsIndexResponder $responder) {
        $this->service = $service;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->response(
            $this->service->findAll()
        );
    }
}
