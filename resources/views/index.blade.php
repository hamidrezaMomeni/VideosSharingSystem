@extends('layout')
@section('content')
<h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
<div class="row">
    <!-- video-item -->
    @foreach($latest_videos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
<h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
<div class="row">
    @foreach($most_viewed_videos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
<h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
<div class="row">
    @foreach($most_popular_videos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
@endsection
