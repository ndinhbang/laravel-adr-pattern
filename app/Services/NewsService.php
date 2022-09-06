<?php

namespace App\Services;

use App\Domain\Repository\NewsRepository;

class NewsService {

    protected NewsRepository $repository;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findAll(): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->repository->all();
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

}
