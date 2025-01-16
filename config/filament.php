<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Panels
    |--------------------------------------------------------------------------
    |
    | Define the panels for your Filament application. The `default` panel
    | is used if no specific panel is requested.
    |
    */

    'panels' => [
        'default' => [
            'id' => 'default', // Unique ID for the panel
            'resources' => [
                // Register your resources here
                // App\Filament\Resources\UserResource::class,
                // App\Filament\Resources\PostResource::class,
            ],
            'pages' => [
                // Register custom pages here
                // App\Filament\Pages\Dashboard::class,
            ],
            'widgets' => [
                // Register custom widgets here
                // App\Filament\Widgets\StatsOverviewWidget::class,
            ],
            'middleware' => [
                'web',
                'auth', // Ensure users are authenticated to access Filament
            ],
            'path' => '/admin', // URL path to access this panel
            'name' => 'Admin Panel', // Display name for this panel
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | The theme to be used for the Filament panel.
    |
    */

    'theme' => [
        'dark_mode' => true, // Enable dark mode support
    ],

    /*
    |--------------------------------------------------------------------------
    | Auth Configuration
    |--------------------------------------------------------------------------
    |
    | Define the authentication guard and login page for Filament.
    |
    */

    'auth' => [
        'guard' => 'web', // Specify the auth guard
        'login_page' => '/login', // URL to the login page
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Prefix
    |--------------------------------------------------------------------------
    |
    | Define a custom prefix for your admin URLs.
    |
    */

    'admin_prefix' => 'admin', // Example: admin/resources, admin/widgets, etc.

    /*
    |--------------------------------------------------------------------------
    | Localization
    |--------------------------------------------------------------------------
    |
    | Define the default language and available languages.
    |
    */

    'locales' => [
        'default' => 'en', // Default language
        'available' => ['en', 'id'], // Available languages
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | Configure the notifications for Filament.
    |
    */

    'notifications' => [
        'stack' => 'top-right', // Notification position (e.g., top-right, bottom-left)
    ],

    /*
    |--------------------------------------------------------------------------
    | Assets
    |--------------------------------------------------------------------------
    |
    | Define custom CSS or JS files to include in Filament.
    |
    */

    'assets' => [
        'css' => [
            'css/custom-styles.css', // Example custom stylesheet
        ],
        'js' => [
            'js/custom-scripts.js', // Example custom JavaScript
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Additional Options
    |--------------------------------------------------------------------------
    |
    | Define any other custom configurations for Filament.
    |
    */

    'additional_options' => [
        'branding' => 'My Application',
    ],

];