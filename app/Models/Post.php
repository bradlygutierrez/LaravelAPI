<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Short excerpt of the content
    public function getExcerptAttribute()
    {
        // avoid named args for broader PHP compatibility
        return substr($this->content ?? '', 0, 120) . '...';
    }

    // human-friendly published date (used as $post->published)
    public function getPublishedAtAttribute()
    {
        return $this->created_at ->format('d / m / Y');
    }


}

