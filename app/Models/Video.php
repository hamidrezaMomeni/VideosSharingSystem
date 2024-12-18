<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use http\Env\Response;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use mysql_xdevapi\Collection;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'thumbnail',
        'length',
        'slug',
        'description',
        'category_id'
    ];

    public function getLengthInHumanAttribute(): string
    {
        return gmdate('i:s', $this->length);
    }

    public function getCreatedAtAttribute(string $value): string
    {
        return verta($value)->formatDifference();
    }

    public function relatedVideos(int $count = 6)
    {
        return $this->category->getRandomVideos($count, [$this->id]);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }
}
