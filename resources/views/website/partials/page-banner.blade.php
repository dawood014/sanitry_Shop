@php($crumbs = $crumbs ?? [])
<div class="pb2">
    <div class="con">
        <h1><i class="{{ $icon ?? 'fas fa-circle' }}"></i> {{ $title }}</h1>
        <div class="bc">
            <a href="{{ route('website.home') }}">Home</a>
            @foreach ($crumbs as $c)
                <span style="color:#00B0FF;margin:0 5px">›</span>
                @if (!empty($c['href']))
                    <a href="{{ $c['href'] }}">{{ $c['label'] }}</a>
                @else
                    <span>{{ $c['label'] }}</span>
                @endif
            @endforeach
        </div>
    </div>
</div>
