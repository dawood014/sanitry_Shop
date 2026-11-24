@extends('layouts.website')

@section('title', ($product['name'] ?? 'Product') . ' | ' . config('app.name'))

@section('content')
    @php
        $gallery = $product['gallery'] ?? [];
        $mainUrl = $product['_main_image'] ?? ($gallery[0][0] ?? '');
        $thumbs = count($gallery) > 1 ? array_slice($gallery, 1) : [];
        $plans = $product['plans'] ?? [];
    @endphp

    @include('website.partials.page-banner', [
        'title' => $product['name'] ?? 'Product',
        'icon' => $product['category']['icon'] ?? 'fas fa-box-open',
        'crumbs' => [
            ['href' => route('website.products'), 'label' => 'All Products'],
            ['href' => route('website.category', $product['category_slug']), 'label' => $product['category']['breadcrumb'] ?? ''],
            ['label' => 'Details'],
        ],
    ])

    <section class="sec">
        <div class="con">
            <div class="pdg">
                <div class="pdgal">
                    <div class="pdmain">
                        <img id="mainImg" src="{{ $mainUrl }}" alt="{{ $product['name'] ?? 'Product' }}">
                    </div>
                    @if (!empty($thumbs))
                        <div class="pdthumbs">
                            @foreach ($thumbs as $j => $t)
                                @php($src = $t[0] ?? '')
                                @php($alt = $t[1] ?? 'thumb')
                                <div class="pdt {{ $j === 0 ? 'on' : '' }}" data-src="{{ $src }}">
                                    <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div>
                    <span class="pdcat"><i class="{{ $product['category']['icon'] ?? 'fas fa-box' }}"></i>
                        {{ $product['category']['title'] ?? '' }}</span>
                    <h1 class="pdtl">{{ $product['name'] ?? '' }}</h1>
                    @if(!empty($product['rating_label']))
                        <div style="display:flex;align-items:center;gap:14px;margin-bottom:18px;flex-wrap:wrap">
                            <div style="display:flex;gap:4px;color:#ffb300;font-size:.9rem">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span style="font-size:.85rem;color:var(--tm)">{{ $product['rating_label'] }}</span>
                            <span style="background:var(--su);color:#fff;padding:2px 10px;border-radius:50px;font-size:.76rem;font-weight:600">In Stock</span>
                        </div>
                    @else
                        <div style="margin-bottom:14px"><span style="background:var(--su);color:#fff;padding:2px 10px;border-radius:50px;font-size:.76rem;font-weight:600">In Stock</span></div>
                    @endif

                    <p class="pddsc">{{ $product['desc'] ?? $product['spec'] ?? '' }}</p>

                    <div class="pricebox">
                        <div class="cpl">Cash Price</div>
                        <div class="cp">{{ $product['cash'] ?? '—' }}</div>
                        <div class="iplans">
                            <div class="ipc">
                                <div class="ipmo">3 Months</div>
                                <div class="ipamt">{{ $plans['3'] ?? '—' }}</div>
                                <div class="ippm">per month</div>
                            </div>
                            <div class="ipc">
                                <div class="ipmo">6 Months</div>
                                <div class="ipamt">{{ $plans['6'] ?? '—' }}</div>
                                <div class="ippm">per month</div>
                            </div>
                            <div class="ipc">
                                <div class="ipmo">12 Months</div>
                                <div class="ipamt">{{ $plans['12'] ?? '—' }}</div>
                                <div class="ippm">per month</div>
                            </div>
                        </div>
                    </div>

                    <div class="pdact">
                        <a href="https://wa.me/923001234567?text={{ rawurlencode('I want to order '.($product['name'] ?? 'this product')) }}"
                            class="btn bg lg" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Order on WhatsApp</a>
                        <a href="tel:+923001234567" class="btn bp lg"><i class="fas fa-phone"></i> Call to Order</a>
                    </div>

                    @if (!empty($product['features']))
                        <div style="background:var(--pp);border-radius:var(--r);padding:20px;margin-bottom:22px;border:1px solid var(--bd)">
                            <h4 style="font-family:var(--fh);color:var(--dk);font-size:1.05rem;margin-bottom:14px"><i class="fas fa-check-circle" style="color:var(--p)"></i> Key Features</h4>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;font-size:.87rem;color:var(--tm)">
                                @foreach (($product['features'] ?? []) as $f)
                                    <div><i class="{{ $f['icon'] ?? 'fas fa-check' }}" style="color:var(--p);margin-right:6px"></i> {{ $f['label'] ?? '' }}</div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <h2 style="font-family:var(--fh);font-size:1.8rem;color:var(--dk);margin-bottom:24px"><i class="fas fa-list-alt" style="color:var(--p)"></i> Full Specifications</h2>
            <table class="stbl">
                <thead>
                    <tr>
                        <th colspan="2">{{ $product['full_specs_title'] ?? ('Technical Specifications — '.($product['name'] ?? '')) }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (($product['spec_rows'] ?? []) as $row)
                        <tr>
                            <td>{{ $row[0] ?? '' }}</td>
                            <td>{{ $row[1] ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if (!empty($relatedProducts))
                <div style="margin-top:60px">
                    <h2 style="font-family:var(--fh);font-size:1.8rem;color:var(--dk);margin-bottom:24px">Related Products</h2>
                    <div class="pgrid">
                        @foreach ($relatedProducts as $rp)
                            @include('website.partials.product-card', ['p' => $rp])
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.pdthumbs .pdt').forEach(function(t) {
            t.addEventListener('click', function() {
                var src = this.getAttribute('data-src');
                document.querySelectorAll('.pdthumbs .pdt').forEach(function(x) { x.classList.remove('on'); });
                this.classList.add('on');
                var m = document.getElementById('mainImg');
                if (m && src) m.setAttribute('src', src);
            });
        });
    </script>
@endpush
