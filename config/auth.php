<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'family' => [
            'driver'   => 'session',
            'provider' => 'families',
        ],

        'manager' => [
            'driver'   => 'session',
            'provider' => 'managers',
        ],

        'driver' => [
            'driver'   => 'session',
            'provider' => 'drivers',
        ],

        'parent' => [
            'driver'   => 'session',
            'provider' => 'parents',
        ],

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'families' => [
            'driver' => 'eloquent',
            'model'  => App\Family::class,
        ],

        'managers' => [
            'driver' => 'eloquent',
            'model'  => App\Manager::class,
        ],

        'drivers' => [
            'driver' => 'eloquent',
            'model'  => App\Driver::class,
        ],

        'parents' => [
            'driver' => 'eloquent',
            'model'  => App\Parent::class,
        ],

        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'families' => [
            'provider' => 'families',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'managers' => [
            'provider' => 'managers',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'drivers' => [
            'provider' => 'drivers',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'parents' => [
            'provider' => 'parents',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
