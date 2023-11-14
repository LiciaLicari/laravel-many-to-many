<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'cover_image', 'content', 'type_id', 'github', 'link', 'technology_id'];

    public function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technology(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
