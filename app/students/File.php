<?php

namespace App\students;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file_name',
        'file_path',
        'username',
        'revision'


    ];
}