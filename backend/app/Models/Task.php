<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     *
     * @var array
     */
    protected $fillable = ['name', 'completed'];

    /**
     * @var array
     */
    protected $casts = [
        'completed' => 'boolean'
    ];
}
