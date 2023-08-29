<?php

namespace App\Repositories;

use App\Models\Auth;
use App\Repositories\BaseRepository;

class AuthRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'username',
        'email',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Auth::class;
    }
}
