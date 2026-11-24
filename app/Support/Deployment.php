<?php

namespace App\Support;

/**
 * Shared-hosting hardening: storage paths, logs, public storage link when PHP symlink is disabled.
 *
 * Uses dirname() so this works during AppServiceProvider::register() before helpers are loaded.
 */
class Deployment
{
    private static function projectRoot(): string
    {
        return dirname(__DIR__, 2);
    }

    /**
     * Ensure Laravel writable paths exist (fixes Monolog mkdir errors on stripped deploys).
     */
    public static function ensureWritableStoragePaths(): void
    {
        $root = self::projectRoot();

        $paths = [
            $root.'/storage/app/public',
            $root.'/storage/framework/cache/data',
            $root.'/storage/framework/sessions',
            $root.'/storage/framework/views',
            $root.'/storage/framework/testing',
            $root.'/storage/logs',
            $root.'/bootstrap/cache',
        ];

        foreach ($paths as $path) {
            if (! is_dir($path)) {
                @mkdir($path, 0775, true);
            }
        }
    }

    /**
     * Point public/storage at storage/app/public (symlink PHP or shell ln on hosts that disable symlink()).
     */
    public static function ensurePublicStorageLink(): void
    {
        $root = self::projectRoot();
        $target = $root.'/storage/app/public';
        $link = $root.'/public/storage';

        if (! is_dir($target)) {
            return;
        }

        $targetReal = realpath($target);
        if ($targetReal === false) {
            return;
        }

        if (is_link($link)) {
            return;
        }

        if (file_exists($link)) {
            return;
        }

        if (function_exists('symlink')) {
            @symlink($targetReal, $link);

            return;
        }

        if (! function_exists('exec') || DIRECTORY_SEPARATOR !== '/') {
            return;
        }

        $t = escapeshellarg($targetReal);
        $l = escapeshellarg($link);
        @exec("ln -snf {$t} {$l} 2>/dev/null");
    }
}
