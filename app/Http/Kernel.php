protected $middlewareGroups = [
    'web' => [
        // другие middleware
        \App\Http\Middleware\Localization::class,
    ],
];
