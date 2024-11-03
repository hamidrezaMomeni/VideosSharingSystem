<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideosStoreRequest;
use App\Http\Requests\VideosUpdateRequest;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideosController extends Controller
{
    public function index()
    {

    }

    public function create(): View
    {
        return view('videos.create');
    }

    public function store(VideosStoreRequest $request): RedirectResponse
    {
        Video::create([
            'name' => $request->get('name'),
            'url' => $request->get('url'),
            'thumbnail' => $request->get('thumbnail'),
            'length' => $request->get('length'),
            'slug' => $request->get('slug'),
            'description' => $request->get('description')
        ]);

        return redirect()->route('index')->with('success', 'ویدیو با موفقیت ثبت شد');
    }

    public function show(Video $video): View
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video): view
    {
        return view('videos.edit', compact('video'));
    }

    public function update(VideosUpdateRequest $request, Video $video)
    {
        $video->update($request->validated());
        return redirect()->route('videos.show', $video->slug)->with('success', 'ویدیو با موفقیت ویرایش شد');
    }
}
