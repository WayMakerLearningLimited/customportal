<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Home URL to the store you want to connect to here
    |--------------------------------------------------------------------------
    */
    'store_url' => env('WOOCOMMERCE_STORE_URL', 'https://waymakerlearning.com/'),

    /*
    |--------------------------------------------------------------------------
    | Consumer Key
    |--------------------------------------------------------------------------
    */
    'consumer_key' => env('WOOCOMMERCE_CONSUMER_KEY', 'ck_841363df5cc2c8fe30e6f5e5009d89a85644eaca'),

    /*
    |--------------------------------------------------------------------------
    | Consumer Secret
    |--------------------------------------------------------------------------
    */
    'consumer_secret' => env('WOOCOMMERCE_CONSUMER_SECRET', 'cs_3750b4cd8b8f8d370d2ca1da74cfa93db8a827a7'),

    /*
    |--------------------------------------------------------------------------
    | SSL support
    |--------------------------------------------------------------------------
    */
    'verify_ssl' => env('WOOCOMMERCE_VERIFY_SSL', false),

    /*
    |--------------------------------------------------------------------------
    | API version
    |--------------------------------------------------------------------------
    */
    'api_version' => env('WOOCOMMERCE_VERSION', false),

    /*
    |--------------------------------------------------------------------------
    | WP API usage
    |--------------------------------------------------------------------------
    */
    'wp_api' => env('WOOCOMMERCE_WP_API', false),

    /*
    |--------------------------------------------------------------------------
    | Force Basic Authentication as query string
    |--------------------------------------------------------------------------
    */
    'query_string_auth' => env('WOOCOMMERCE_WP_QUERY_STRING_AUTH', true),

    /*
    |--------------------------------------------------------------------------
    | WP timeout
    |--------------------------------------------------------------------------
    */
    'timeout' => env('WOOCOMMERCE_WP_TIMEOUT', 15),

    /*
    |--------------------------------------------------------------------------
    | WP Custom API Prefix
    |--------------------------------------------------------------------------
    */
  
];
