<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    #id
    #path

    protected $table = 'photos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'path',
    ];
}
