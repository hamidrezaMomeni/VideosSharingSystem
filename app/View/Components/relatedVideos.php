<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;


class relatedVideos extends Component
{
    public Collection $videos;
    public string $title = "ویدیو های مرتبط";
    /**
     * Create a new component instance.
     */
    public function __construct(Video $video)
    {
        $this->videos = $video->relatedVideos(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.related-videos');
    }
}
