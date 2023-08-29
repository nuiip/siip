<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Register",
 *      required={"username","email","password"},
 *      @OA\Property(
 *          property="username",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="email",
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
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Register extends Model
{
    public $table = 'users';

    public $fillable = [
        'username',
        'email',
        'password'
    ];

    protected $casts = [
        'username' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    public static array $rules = [
        'username' => 'required|min:3|max:25',
        'email' => 'required|email|max:100',
        'password' => 'required|min:6'
    ];

    
}
