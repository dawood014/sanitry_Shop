<?php

namespace App\Support;

class WebsiteCatalog
{
    /** @return array<string, mixed> */
    public static function categories(): array
    {
        return config('website.categories', []);
    }

    /** @return array<string, mixed>|null */
    public static function category(string $slug): ?array
    {
        return self::categories()[$slug] ?? null;
    }

    /** @return array<string, mixed>|null */
    public static function findProduct(string $slug): ?array
    {
        foreach (self::categories() as $catSlug => $cat) {
            foreach (($cat['products'] ?? []) as $p) {
                if (($p['slug'] ?? '') === $slug) {
                    return array_merge($p, [
                        'category_slug' => $catSlug,
                        'category' => $cat,
                    ]);
                }
            }
        }

        return null;
    }

    /** @return list<array<string, mixed>> */
    public static function allProductsFlattened(): array
    {
        $out = [];
        foreach (self::categories() as $catSlug => $cat) {
            foreach (($cat['products'] ?? []) as $p) {
                $out[] = array_merge($p, [
                    'category_slug' => $catSlug,
                    'category_title' => $cat['title'] ?? '',
                ]);
            }
        }

        return $out;
    }

    /** Featured cards for homepage (template order). */
    public static function featuredProducts(): array
    {
        $list = [];
        foreach ((array) config('website.featured_slugs_order', []) as $slug) {
            $p = self::findProduct((string) $slug);
            if ($p !== null) {
                $list[] = $p;
            }
        }

        return $list;
    }

    /** @param list<array<string, mixed>> $products */
    /** @return list<string> */
    public static function uniqueBrands(array $products): array
    {
        $brands = collect($products)
            ->pluck('data_brand')
            ->filter()
            ->map(fn ($b) => (string) $b)
            ->unique()
            ->sort()
            ->values()
            ->all();
    }
}
