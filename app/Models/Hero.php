<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'gender', 'strength','speed', 'intelligence'];
    protected $primaryKey = 'id';
    public $incrementing = true;
}
