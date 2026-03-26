<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Admin extends Model
{
    use Authenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    public function isSuperAdmin()
    {
        return $this->role === 'super_admin';
    }
}