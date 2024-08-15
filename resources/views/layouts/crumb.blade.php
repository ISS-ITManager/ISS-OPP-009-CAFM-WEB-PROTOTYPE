<h6 class="py-3 mb-2">
    @php
        $last = sizeOf($page['crumb']);
        $count = 1;
    @endphp
    @foreach ($page['crumb'] as $title => $link)
        @if ($last == $count)
            <a href="{{$link}}"> {{$title}}</a>
        @else
            <a href="{{$link}}" class="text-muted fw-light"> {{$title}} / </a>
        @endif
        @php $count++; @endphp
    @endforeach
</h6>