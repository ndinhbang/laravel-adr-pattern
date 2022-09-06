<?php

namespace App\Domain\Repository;

class NewsRepository extends EloquentRepository
{
    protected string $modelClass = \App\Domain\Entity\News::class;
}
