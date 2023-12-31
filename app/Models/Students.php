<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Students extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'fullname',
        'gender',
        'dateofbirth',
        'address',
        'mobile',
        'email',
        'password'
    ];
}
