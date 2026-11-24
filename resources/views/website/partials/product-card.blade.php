@php
    $badge = $p['badge'] ?? ['text' => '', 'class' => ''];
    $imgSrc = 'https://placehold.co/420x280/' . ($p['img_hex'] ?? 'ccc') . '/' . ($p['img_fg'] ?? '111') . '?text=' . ($p['img_text'] ?? 'Product');
@endphp
<div class="pc" data-name="{{ $p['data_name'] ?? '' }}" data-brand="{{ $p['data_brand'] ?? '' }}">
    @if (!empty($badge['text']))
        <span class="pb {{ $badge['class'] ?? '' }}">{{ $badge['text'] }}</span>
    @endif
    <div class="pimg">
        <img src="{{ $imgSrc }}" alt="{{ $p['img_alt'] ?: ($p['name'] ?? '') }}" loading="lazy">
    </div>
    <div class="pi">
        <div class="pbr">{{ $p['brand'] ?? '' }}</div>
        <div class="pnm">{{ $p['name'] ?? '' }}</div>
        <div class="psp">{{ $p['spec'] ?? '' }}</div>
        @if(!empty($p['cash']))
            <div class="ppr">
                <div class="pcs">{{ $p['cash'] }}</div>
                @if(!empty($p['install']))
                    <div class="pin">{!! $p['install'] !!}</div>
                @endif
            </div>
        @endif
        <div class="pact">
            <a href="{{ route('website.product', ['slug' => $p['slug']]) }}" class="btn bp sm"><i class="fas fa-eye"></i> Details</a>
            @if(!empty($p['wa']))
                <a href="https://wa.me/923001234567?text={{ rawurlencode($p['wa']) }}" class="btn bg sm"
                    target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
            @endif
        </div>
    </div>
</div>
