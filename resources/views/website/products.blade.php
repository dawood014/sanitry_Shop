@extends('layouts.website')

@section('title', 'All Products | ' . config('app.name'))

@section('content')
    @include('website.partials.page-banner', [
        'title' => 'All Products',
        'icon' => 'fas fa-box',
        'crumbs' => [['label' => 'Browse']],
    ])

    <section class="sec">
        <div class="con">
            <div class="fbars">
                @foreach (($filters ?? ['all']) as $i => $brand)
                    <button type="button" class="fb {{ $i === 0 ? 'on' : '' }}" data-f="{{ $brand }}">{{ $brand === 'all' ? 'All Brands' : ucfirst((string) $brand) }}</button>
                @endforeach
            </div>
            <div class="pgrid">
                @foreach ($products as $p)
                    @include('website.partials.product-card', ['p' => $p])
                @endforeach
            </div>
        </div>
    </section>
@endsection
