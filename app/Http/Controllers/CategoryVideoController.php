<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryVideoController extends Controller
{
    public function index(Category $category): View
    {
        $videos = $category->videos()->paginate(5);
        $title = $category->name;
        return view('videos.index', compact('videos', 'title'));
    }
}
