<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Re-theme default SalePro demo catalog for Sanitry (hygiene & sanitation retail).
 */
class SanitryDemoSeeder extends Seeder
{
    public function run(): void
    {
        if (! Schema::hasTable('general_settings')) {
            return;
        }

        DB::table('general_settings')->where('id', 1)->update([
            'site_title' => 'Sanitry',
            'company_name' => 'Sanitry Hygiene Supplies',
            'developed_by' => 'Sanitry',
        ]);

        if (Schema::hasTable('invoice_settings')) {
            DB::table('invoice_settings')->update(['header_text' => 'Sanitry']);
        }

        if (Schema::hasTable('users')) {
            DB::table('users')->where('id', 1)->update([
                'name' => 'admin',
                'company_name' => 'Sanitry',
            ]);
        }

        if (Schema::hasTable('billers')) {
            DB::table('billers')->where('id', 1)->update([
                'name' => 'Sanitry Main Counter',
                'company_name' => 'Sanitry Hygiene Supplies',
                'email' => 'counter@sanitry.local',
                'phone_number' => '0300-0000001',
                'address' => 'Industrial Area, Main Store',
                'city' => 'Peshawar',
            ]);
        }

        if (Schema::hasTable('warehouses')) {
            DB::table('warehouses')->where('id', 1)->update([
                'name' => 'Sanitry Central Warehouse',
                'phone' => '091-0000000',
                'email' => 'warehouse@sanitry.local',
                'address' => 'Ring Road, Store #12',
            ]);
        }

        if (Schema::hasTable('suppliers')) {
            DB::table('suppliers')->where('id', 1)->update([
                'name' => 'Hygiene Wholesale Co.',
                'company_name' => 'Hygiene Wholesale Co.',
                'email' => 'orders@hygienewholesale.local',
                'phone_number' => '091-1111111',
                'address' => 'Wholesale Market Block B',
                'city' => 'Peshawar',
            ]);
        }

        if (Schema::hasTable('customers')) {
            DB::table('customers')->where('id', 1)->update([
                'name' => 'City Hospital Stores',
                'company_name' => 'City Hospital',
                'email' => 'stores@cityhospital.local',
                'phone_number' => '091-2222222',
                'address' => 'Hospital Road',
                'city' => 'Peshawar',
            ]);
        }

        $brands = [
            1 => 'Dettol',
            2 => 'Harpic',
            3 => 'Lizol',
            4 => 'Savlon',
            5 => 'Dove',
            6 => 'Lifebuoy',
            7 => 'Vim',
            8 => 'Surf Excel',
        ];

        if (Schema::hasTable('brands')) {
            foreach ($brands as $id => $title) {
                DB::table('brands')->where('id', $id)->update(['title' => $title]);
            }
        }

        $categories = [
            1 => 'Hand Sanitizers',
            2 => 'Sanitizer Refills',
            3 => 'Alcohol Gels',
            4 => 'Hospital Grade',
            5 => 'Travel Size',
            6 => 'Surface Disinfectants',
            7 => 'Floor Cleaners',
            8 => 'Spray Bottles',
            9 => 'Concentrates',
            10 => 'Wipes',
            11 => 'Mops & Tools',
            12 => 'Personal Hygiene',
            23 => 'Industrial Sanitation',
            29 => 'Bulk Chemicals',
            30 => 'Paper Products',
            31 => 'Protective Supplies',
            33 => 'Odor Control',
            39 => 'Janitorial Bundles',
        ];

        if (Schema::hasTable('categories')) {
            foreach ($categories as $id => $name) {
                DB::table('categories')->where('id', $id)->update(['name' => $name]);
            }
        }

        $products = [
            1 => ['Dettol Antiseptic Liquid 1L', 450, 599, 1, 6],
            2 => ['Harpic Power Plus Toilet Cleaner 500ml', 280, 350, 2, 6],
            3 => ['Dettol Instant Hand Sanitizer 200ml', 180, 250, 1, 1],
            4 => ['Lizol Floral Disinfectant Surface Cleaner 2L', 620, 799, 3, 6],
            5 => ['Savlon Antiseptic Cream 30g', 95, 140, 4, 12],
            6 => ['Lifebuoy Handwash Refill 1L', 320, 420, 6, 12],
            7 => ['Vim Dishwash Liquid Lemon 750ml', 210, 280, 7, 6],
            8 => ['Surf Excel Matic Front Load 2kg', 890, 1099, 8, 39],
            9 => ['Dettol Disinfectant Spray 170ml', 380, 480, 1, 6],
            10 => ['Harpic Bathroom Cleaner 1L', 350, 449, 2, 6],
        ];

        if (Schema::hasTable('products')) {
            foreach ($products as $id => [$name, $cost, $price, $brandId, $categoryId]) {
                DB::table('products')->where('id', $id)->update([
                    'name' => $name,
                    'cost' => $cost,
                    'price' => $price,
                    'brand_id' => $brandId,
                    'category_id' => $categoryId,
                    'product_details' => '<p>'.$name.' — stocked for Sanitry demo POS and inventory workflows.</p>',
                ]);
            }
        }

        Cache::forget('general_setting');
    }
}