<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository extends BaseRepository
{
    public function setModel(): string
    {
        return Post::class;
    }
}