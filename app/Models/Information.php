<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    const FILE_PATH = 'informations';
    protected $fillable = ['photo','title', 'description'];
}
