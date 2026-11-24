<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Align legacy seeded titles with Sanitry branding.
     *
     * Safe: only updates rows still using the vendor default strings.
     */
    public function up(): void
    {
        $brand = 'Sanitry';

        if (Schema::hasTable('general_settings')) {
            DB::table('general_settings')->where('site_title', 'SalePro POS SaaS')->update([
                'site_title' => $brand,
            ]);
        }

        if (Schema::hasTable('invoice_settings')) {
            DB::table('invoice_settings')->where('header_text', 'SalePro')->update([
                'header_text' => $brand,
            ]);
        }

        Cache::forget('general_setting');
    }

    /**
     * Intentionally empty — titles may have been customized post-migration.
     */
    public function down(): void
    {
        //
    }
};
