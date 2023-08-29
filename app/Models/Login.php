<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Login",
 *      required={"username","email","password"},
 *      @OA\Property(
 *          property="username",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="password",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      )
 * )
 */class Login extends Model
{
    public $table = 'users';

    public $fillable = [
        'username',
        'password'
    ];

    protected $casts = [
        'username' => 'string',
        'password' => 'string'
    ];

    
}
