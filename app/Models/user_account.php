<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_account extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $user_account = [
        'account_id',
        'email',
        'password',
        'user_type',
        'isbanned',
    ];
}
