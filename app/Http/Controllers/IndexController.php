<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request): string
    {
        $latest_videos       = Video::query()->latest()->take(6)->get();
        $most_popular_videos = Video::all()->random(6);
        $most_viewed_videos  = Video::all()->random(6);

        return view('index',
         compact( 'latest_videos','most_popular_videos','most_viewed_videos')
);
    }
}
