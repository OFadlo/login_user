<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '286925711731456',
    'client_secret' => '38a5818062658148c1be9da11720462c',
    'redirect' => 'http://localhost:8000/callback/facebook',
],

 'google' => [
    'client_id' => '436952836503-abq0fa265pnuna6bks9qe6i70t5qla29.apps.googleusercontent.com',
    'client_secret' => 'MplnJGX3IOyq18SdDMd0tPds',
    'redirect' => 'http://localhost:8000/callback/google',
],

];
