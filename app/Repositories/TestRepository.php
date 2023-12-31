<?php

namespace App\Repositories;

use App\Models\Test;
use App\Repositories\BaseRepository;

class TestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'body',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Test::class;
    }
}
