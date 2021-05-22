<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllVideo extends Model
{
    use HasFactory;

    protected $fillable = [
    	'code',
    	'title',
    	'day',
    	'updated',
    	'description',
    ];
}
