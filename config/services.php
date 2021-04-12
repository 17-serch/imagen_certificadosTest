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
    'facebook' => [
        'client_id' => '490217198832630',
        'client_secret' => '4c17311f1b3b711e68f919455b0e84f4',
        'redirect' => 'http://localhost:8000/cursos_recibidos',
    ],
    'google' => [
        'client_id' => '596479948474-uqm455uqvhdi4jh9l7g5h118p9tch8n6.apps.googleusercontent.com',
        'client_secret' => 'SB83l8pS387Uu7Eg5fcG9xD9',
        'redirect' => 'http://localhost:8000/cursos_recibidos',
    ],
];
