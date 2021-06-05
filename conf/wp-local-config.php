<?php
/**
 * WordPress local config.
 */

// Conditionally turn on HTTPS since we're behind nginx-proxy.
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && 'https' === $_SERVER['HTTP_X_FORWARDED_PROTO']) { // Input var ok.
    $_SERVER['HTTPS'] = 'on';
}

// Indicate VIP Go environment.
define('VIP_GO_ENV', 'local');

// Disable automatic updates.
define('AUTOMATIC_UPDATER_DISABLED', true);

// This provides the host and port of the development Memcached server. The host
// should match the container name in `docker-compose.memcached.yml`. If you
// aren't using Memcached, it will simply be ignored.
$memcached_servers = [
    [
        'memcached',
        11211,
    ],
];

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'xpinc-eventos.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
