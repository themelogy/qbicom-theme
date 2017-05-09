    <div class="member-image">
        <img class="img-circle" src="{{ $employee->present()->firstImage(336,336,'fit',80) }}" alt="{{ $employee->fullname }}">
    </div>
    <a href="{{ $employee->url }}">
        <h3>
            {{ $employee->fullname }}
        </h3>
    </a>
    <span>{{ $employee->position }}</span>
    <ul class="team-social">
        @if($employee->facebook)
            <li><a target="_blank" href="{{ $employee->facebook }}"><span aria-hidden="true" class="social_facebook"></span></a></li>
        @endif
        @if($employee->twitter)
            <li><a target="_blank" href="{{ $employee->twitter }}"><span aria-hidden="true" class="social_twitter"></span></a></li>
        @endif
        @if($employee->instagram)
            <li><a target="_blank" href="{{ $employee->google }}"><span aria-hidden="true" class="social_instagram"></span></a></li>
        @endif
    </ul>