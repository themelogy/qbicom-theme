@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'blog.category'])
    @slot('title')
    {{ $category->name }}
    @endslot
    @endcomponent
@endsection

@component('blog::layouts.master')
    @if(count($posts)>0)

        @foreach($posts as $post)
            @include('blog::partials._post')
        @endforeach

        <!-- PAGINATION -->
        <div class="row mt-0">
            {!! $posts->render('blog::pagination.default') !!}
        </div>

    @else
        {!! trans("themes::blog.messages.no posts") !!}
    @endif
@endcomponent