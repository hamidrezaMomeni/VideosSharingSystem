<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{ $video->lengthInHuman }}</small>
            <a href="{{ route('videos.show', $video->slug) }}"><img src="{{ $video->thumbnail }}" alt=""></a>
        </div>
        <div class="video-info">
            <a href="{{ route('videos.show', $video->slug) }}" class="title" style="display: inline">{{ $video->name  }}</a>
            <a href="{{ route('videos.edit', $video->id) }}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a class="channel-name" href="#">مهرداد سامی<span>
                            <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at }}</span>
            <span class="date"><i class="fa fa-tag"></i>{{ $video->categoryName }}</span>
        </div>
    </div>
</div>
