<!-- SIDEBAR -->
<div class="col-sm-4 col-md-3 col-md-offset-1">

    <!-- WIDGET -->
    <div class="widget">

        <h5 class="widget-title2">{{ trans('themes::blog.category') }}</h5>

        <div class="widget-body">
            <ul class="clearlist widget-menu font-poppins">
                @foreach(BlogCategory::all() as $category)
                    <li>
                        <a href="{{ $category->url }}" title="">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

    <!-- WIDGET -->
    <div class="widget">

        <h5 class="widget-title2">{!! trans("themes::blog.recent posts") !!}</h5>

        <div class="widget-body mt-25">
            <ul class="clearlist widget-posts">
                @foreach(Blog::latest(3) as $post)
                    <li class="clearfix">
                        <a href=""><img src="{{ $post->present()->firstImage(70,70,'fit',80) }}" alt="{{ $post->title }}" class="widget-posts-img"></a>
                        <div class="widget-posts-descr2">
                            <a href="#" class="font-poppins lh-18">{{ $post->title }}</a>
                            <div class="lh-18">{{ $post->created_at->formatLocalized('d F Y') }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

    <!-- WIDGET -->
    <div class="widget">

        <h5 class="widget-title2">{!! trans("themes::blog.tags") !!}</h5>

        <div class="widget-body mt-25">
            <div class="tags">
                @if(Request::route()->getName() == 'blog.index')
                    @foreach(Blog::latest(10) as $recent)
                        <?php $tag = $recent->tags()->first(); ?>
                        @if($tag)
                            <a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
                        @endif
                    @endforeach
                @else
                    @if(isset($post))
                        @foreach($post->tags as $tag)
                            <a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
                        @endforeach
                    @endif
                @endif
            </div>
        </div>

    </div>

    <!-- WIDGET -->
    <div class="widget">

        <h5 class="widget-title2">{!! trans("themes::blog.archive") !!}</h5>

        <div class="widget-body">
            <ul class="clearlist widget-menu font-poppins">
                @foreach(Blog::archive() as $archive)
                    <li>
                        <a href="#" title="">{{ $archive->created_at->formatLocalized('F') }} {{ $archive->year }}</a>
                        <small><span class="slash-divider">/</span> {{ $archive->post_count }}</small>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

</div>