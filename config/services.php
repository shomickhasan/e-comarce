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
        'client_id' => '25012475258-v4eci626628fqeal5h9k2ilv31u97ta4.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/sociallogin/google/googlelogin',
    ],
    'facebook' => [
        'client_id' => '376703190948121',
        'client_secret' => 'f9b78e51b32210dc7d6f029b1c91333d',
        'redirect' => 'http://localhost:8000/sociallogin/facebook',
    ],

];
