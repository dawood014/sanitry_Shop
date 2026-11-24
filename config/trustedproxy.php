<?php

$raw = env('TRUSTED_PROXIES');

$proxies = match (true) {
    // Behind Hostinger / Cloudflare etc.: trust forwarded proto/host (default production-friendly).
    $raw === null, $raw === '' => '*',
    in_array(strtolower((string) $raw), ['false', '0', 'off', 'none'], true) => null,
    default => $raw,
};

return [

    'proxies' => $proxies,

];
