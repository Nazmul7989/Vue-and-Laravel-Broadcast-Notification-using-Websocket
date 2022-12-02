<?php

namespace App\Models\Admin;

use App\Events\PostCreated;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'created' => PostCreated::class,
    ];
}
