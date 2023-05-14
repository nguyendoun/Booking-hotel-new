<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '485027639220-i2fttst4k9hi8g32hhpb36tclhm0qifc.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
      ], 
    'facebook' => [
        'client_id' => '1430047707798312', 
        'client_secret' => 'a91bbcec6d961f41a5ee9eb92b181756', 
        'redirect' => 'https://booking-hotel.test/callback/facebook',
    ],
];
