<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

 class Auth extends Model
{
    public $table = 'auths';

    public $fillable = [
        'username',
        'email',
        'password',
        'status'
    ];

    protected $casts = [
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'username' => 'required|min:3|max:25',
        'email' => 'required|email|max:100',
        'password' => 'required|min:6'
    ];

    
}
