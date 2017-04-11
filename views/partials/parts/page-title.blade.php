<div class="page-title-cont page-title-small bg-gray">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                @if(isset($title))
                <h1 class="page-title">{{ $title }}</h1>
                @endif
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs font-poppins">
                    @if(isset($breadcrumbs))
                        {!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>