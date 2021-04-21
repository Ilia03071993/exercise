<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id', 'item_id'
    ];
}
