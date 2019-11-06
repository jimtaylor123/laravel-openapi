<?php

return [

    'info' => [
        'title' => config('app.name'),
        'description' => null,
        'version' => '1.0.0',
    ],

    'servers' => [
        [
            'url' => env('APP_URL'),
        ],
    ],

    'tags' => [

        // [
        //    'name' => 'user',
        //    'description' => 'Application users',
        // ],

    ],

    // Route for exposing specification.
    // Leave uri null to disable.
    'route' => [
        'uri' => '/openapi',
    ],

];
