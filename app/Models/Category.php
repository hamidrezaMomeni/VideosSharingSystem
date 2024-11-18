<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function getRandomVideos(array $excepts, int $count = 6): Collection
    {
        return $this->videos()->inRandomOrder()->get()->except($excepts)->take($count);
    }
}
