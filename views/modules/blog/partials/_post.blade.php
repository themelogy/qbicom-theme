<!-- Post Item -->
<div class="wow fadeIn pb-90">
    <div class="post-prev-img">
        <a href="{{ $post->url }}"><img src="{{ $post->present()->firstImage(750,300,'fit',80) }}" alt="{{ $post->title }}"></a>
    </div>

    <div class="post-prev-title">
        <h3 class="post-title-big"><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
    </div>

    <div class="post-prev-info ">
        {{ $post->created_at->formatLocalized('d F') }}
        <span class="slash-divider">/</span>
        <a href="{{ route('blog.author', [$post->author->slug]) }}">{{ $post->author->fullname }}</a>
        @if(count($post->tags)>0)
            <span class="slash-divider">/</span>
            @foreach($post->tags as $tag)
                <a href="{{ $tag->url }}">{{ $tag->name }}</a>@if(!$loop->last), @endif
            @endforeach
        @endif
    </div>


    <div class="mb-30">
        {!! $post->intro !!}
    </div>

    <div class="post-prev-more-cont clearfix">
        <div class="post-prev-more left">
            <a href="{{ $post->url }}" class="font-poppins">{{ trans('global.buttons.read more') }}</a>
        </div>
    </div>
</div>