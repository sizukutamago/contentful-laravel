<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

return [
    /*
     * The ID of the space you want to access.
     */
    'delivery.space' => env('CONTENTFUL_SPACE_ID'),

    /*
     * The ID of the environment you want to access.
     */
    'delivery.environment' => env('CONTENTFUL_ENVIRONMENT_ID', 'master'),

    /*
     * An API key for the above specified space.
     */
    'delivery.token' => env('CONTENTFUL_DELIVERY_TOKEN'),

    /*
     * Controls whether Contentful's Delivery or Preview API is accessed.
     */
    'delivery.preview' => env('CONTENTFUL_USE_PREVIEW',true),

    /*
     * The default locale to use when querying the API.
     */
    'delivery.defaultLocale' => env('CONTENTFUL_DEFAULT_LOCALE'),

    /*
     * An array of further client options. See Contentful\Delivery\Client::__construct() for more.
     */
    'delivery.options' => [],
];
