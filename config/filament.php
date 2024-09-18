<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Filament will be accessible from. Feel free
    | to change this path to anything you like.
    |
    */

    'path' => 'admin',  // Це шлях до адмін-панелі Filament

    'panels' => [
        'default' => [
            'id' => 'admin',
            'resources' => [
                // Тут ви можете додавати свої ресурси, наприклад:
                 App\Filament\Resources\PostResource::class,
            ],
            'pages' => [
                 App\Filament\Pages\Dashboard::class,
            ],
            'widgets' => [
                 App\Filament\Widgets\AccountWidget::class,
            ],
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Filament Core Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Filament's core assets are stored. You may
    | change this path if you want to serve these assets from a different
    | location.
    |
    */

    'core_path' => 'filament',

    /*
    |--------------------------------------------------------------------------
    | Filament Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Filament will be accessible from. If the
    | setting is null, Filament will reside under the same domain as the
    | app. Otherwise, this value will serve as the subdomain.
    |
    */

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Filament will use to store files. You may use
    | any of the disks defined in the `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Cache Path
    |--------------------------------------------------------------------------
    |
    | This is the directory that Filament will use to store cache files that
    | are used to optimize the registration of components.
    |
    | After changing the path, you should run `php artisan filament:cache-components`.
    |
    */

    'cache_path' => base_path('bootstrap/cache/filament'),

    /*
    |--------------------------------------------------------------------------
    | Auth Guard
    |--------------------------------------------------------------------------
    |
    | Filament will use this guard to authenticate users. If you have multiple
    | guards, you may specify which one should be used.
    |
    */

    'auth' => [
        'guard' => env('FILAMENT_AUTH_GUARD', 'web'),
        'middleware' => ['auth'],  // Додайте додаткові middleware, якщо потрібно
    ],

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    |
    | By uncommenting the Laravel Echo configuration, you may connect Filament
    | to any Pusher-compatible websockets server.
    |
    | This will allow your users to receive real-time notifications.
    |
    */

    'broadcasting' => [

        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | This is the model that Filament will use for user authentication and
    | authorization. You may change this to your own user model.
    |
    */

    'user_model' => App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    |
    | This sets the delay before loading indicators appear.
    |
    | Setting this to 'none' makes indicators appear immediately, which can be
    | desirable for high-latency connections. Setting it to 'default' applies
    | Livewire's standard 200ms delay.
    |
    */

    'livewire_loading_delay' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Layouts
    |--------------------------------------------------------------------------
    |
    | Here you may configure the layouts that are available for your Filament
    | panels.
    |
    */

    'layouts' => [
        'app' => App\Filament\Layouts\AppLayout::class,
        'panel' => App\Filament\Layouts\PanelLayout::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Themes
    |--------------------------------------------------------------------------
    |
    | You may specify the default theme that should be used for your Filament
    | panels.
    |
    */

    'themes' => [
        'default' => 'light', // Вкажіть 'dark' для темної теми
    ],

    /*
    |--------------------------------------------------------------------------
    | Resource Directory
    |--------------------------------------------------------------------------
    |
    | This is the directory where Filament will store generated resources.
    |
    */

    'resources_directory' => app_path('Filament/Resources'),

];