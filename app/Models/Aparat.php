<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparat extends Model
{
    use HasFactory;
    const FILE_PATH = 'aparats';
    protected $fillable = ['photo', 'name', 'position'];
}
