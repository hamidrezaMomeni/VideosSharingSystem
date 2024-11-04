<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideosStoreRequest;
use App\Http\Requests\VideosUpdateRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VideosController extends Controller
{
    private Collection $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }
    public function index()
    {

    }

    public function create(): View
    {
        return view('videos.create', ['categories' => $this->categories]);
    }

    public function store(VideosStoreRequest $request): RedirectResponse
    {
        Video::create($request->validated());

        return redirect()->route('index')->with('success', 'ویدیو با موفقیت ثبت شد');
    }

    public function show(Video $video): View
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video): view
    {
        return view('videos.edit', ['video' => $video, 'categories' => $this->categories]);
    }

    public function update(VideosUpdateRequest $request, Video $video)
    {
        $video->update($request->validated());
        return redirect()->route('videos.show', $video->slug)->with('success', 'ویدیو با موفقیت ویرایش شد');
    }
}
