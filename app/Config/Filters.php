<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters;
use App\Filters\CorsFilter; // Include the custom CORS filter
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\ForceHTTPS;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\PageCache;
use CodeIgniter\Filters\PerformanceMetrics;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseFilters
{
    /**
     * Configures aliases for Filter classes to make reading things easier
     *
     * @var array<string, class-string|list<class-string>>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'corsFilter'    => \App\Filters\CorsFilter::class,  // CORS filter alias
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'forcehttps'    => ForceHTTPS::class,
        'pagecache'     => PageCache::class,
        'performance'   => PerformanceMetrics::class,
    ];

    /**
     * Special required filters
     *
     * @var array{before: list<string>, after: list<string>}
     */
    public array $required = [
        'before' => [
            'forcehttps',  // Force secure requests
            'pagecache',   // Web page caching
        ],
        'after' => [
            'pagecache',   // Web page caching
            'performance', // Performance metrics
            'toolbar',     // Debug toolbar
        ],
    ];

    /**
     * Filters applied globally
     *
     * @var array<string, list<string>>
     */
    public array $globals = [
        'before' => [
            'corsFilter',
        ],
        'after' => [
            'corsFilter',
        ],
    ];

    /**
     * Method-based filters (if you need to apply filters based on HTTP methods)
     *
     * @var array<string, list<string>>
     */
    public array $methods = [];

    /**
     * Filters for specific URIs
     *
     * @var array<string, array<string, list<string>>>
     */
    public array $filters = [];
}
