@extends('layouts.website')

@section('title', ($category['title'] ?? 'Category') . ' | ' . config('app.name'))

@section('content')
    @include('website.partials.page-banner', [
        'title' => $category['title'] ?? 'Products',
        'icon' => $category['icon'] ?? 'fas fa-box',
        'crumbs' => [
            ['href' => route('website.products'), 'label' => 'All Products'],
            ['label' => $category['breadcrumb'] ?? $category['title'] ?? ''],
        ],
    ])

    <section class="sec">
        <div class="con">
            <div class="fbars">
                @foreach (($category['filters'] ?? ['all']) as $i => $brand)
                    <button type="button" class="fb {{ $i === 0 ? 'on' : '' }}" data-f="{{ $brand }}">{{ $brand === 'all' ? 'All Brands' : ucfirst((string) $brand) }}</button>
                @endforeach
            </div>
            <div class="pgrid">
                @foreach (($category['products'] ?? []) as $p)
                    @include('website.partials.product-card', ['p' => $p])
                @endforeach
            </div>
        </div>
    </section>
@endsection
