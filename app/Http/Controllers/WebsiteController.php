<?php

namespace App\Http\Controllers;

use App\Support\WebsiteCatalog;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    public function home(): View
    {
        return view('website.home', [
            'activeNav' => 'home',
            'categories' => WebsiteCatalog::categories(),
            'featuredProducts' => WebsiteCatalog::featuredProducts(),
        ]);
    }

    public function about(): View
    {
        return view('website.about', ['activeNav' => 'about']);
    }

    public function contact(): View
    {
        return view('website.contact', ['activeNav' => 'contact']);
    }

    /** Browse all products (`products.html` in template — URL is `/browse` to avoid conflicting with admin POS `products` routes). */
    public function products(): View
    {
        $flattened = WebsiteCatalog::allProductsFlattened();
        $filters = ['all', ...WebsiteCatalog::uniqueBrands($flattened)];

        return view('website.products', [
            'activeNav' => 'products',
            'products' => $flattened,
            'filters' => $filters,
        ]);
    }

    public function category(string $slug): View
    {
        $cat = WebsiteCatalog::category($slug);
        if ($cat === null) {
            abort(404);
        }

        return view('website.category', [
            'activeNav' => 'products',
            'categorySlug' => $slug,
            'category' => $cat,
        ]);
    }

    public function product(string $slug): View
    {
        $product = WebsiteCatalog::findProduct($slug);
        if ($product === null) {
            abort(404);
        }

        $product = $this->hydrateProduct($product);

        return view('website.product', [
            'activeNav' => 'products',
            'product' => $product,
            'relatedProducts' => collect($product['category']['products'] ?? [])
                ->reject(fn ($p) => ($p['slug'] ?? '') === $slug)
                ->take(3)
                ->values()
                ->all(),
        ]);
    }

    public function offers(): View
    {
        return view('website.offers', ['activeNav' => 'offers']);
    }

    public function installments(): View
    {
        return view('website.installments', ['activeNav' => 'installments']);
    }

    /** @param array<string, mixed> $product */
    private function hydrateProduct(array $product): array
    {
        if (empty($product['plans'])) {
            $digits = preg_replace('/\D/', '', (string) ($product['cash'] ?? ''));
            $n = (int) $digits;
            if ($n > 0) {
                $product['plans'] = [
                    '3' => 'Rs. '.number_format((int) ceil($n / 3)),
                    '6' => 'Rs. '.number_format((int) ceil($n / 6)),
                    '12' => 'Rs. '.number_format((int) ceil($n / 12)),
                ];
            }
        }

        $hex = (string) ($product['img_hex'] ?? '1B3FC4');
        $fg = (string) ($product['img_fg'] ?? 'fff');
        $txt = (string) ($product['img_text'] ?? 'Product');
        $mainDefault = 'https://placehold.co/600x420/'.$hex.'/'.$fg.'?text='.$txt;

        $gallery = $product['gallery'] ?? [];
        $main = isset($gallery[0][0]) ? $gallery[0][0] : $mainDefault;
        $product['_main_image'] = $main;

        if ($gallery === []) {
            $product['gallery'] = [
                [$main, $product['name'] ?? 'Product'],
                ['https://placehold.co/80x80/'.$hex.'/'.$fg.'?text=1', 'View 1'],
                ['https://placehold.co/80x80/2979FF/fff?text=2', 'View 2'],
                ['https://placehold.co/80x80/0d2a8a/fff?text=3', 'View 3'],
            ];
        } else {
            $product['gallery'] = $gallery;
        }

        if (empty($product['spec_rows'])) {
            $product['full_specs_title'] ??= 'Technical Specifications — '.$product['name'];
            $product['spec_rows'] = [
                ['Brand', $product['brand'] ?? '—'],
                ['Model highlights', $product['spec'] ?? '—'],
                ['Availability', '✓ In Stock — confirm at showroom'],
            ];
        }

        return $product;
    }
}
