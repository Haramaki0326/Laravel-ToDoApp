<?php

$rules = [
    '@PSR12' => true,
];

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__,
        // __DIR__.'/app',
        // __DIR__.'/config',
        // __DIR__.'/database',
        // __DIR__.'/routes',
        // __DIR__.'/tests',
    ])
    ->exclude([
        'vendor',
        // 'app/Providers',
        // 'app/Http/Middleware',
        // 'app/Http/Kernel.php',
        // 'config/app.php',
        // 'config/database.php',
        // 'config/logging.php',
        // 'config/services.php',
        // 'database/factories',
        // 'database/seeds',
        // 'tests/TestCase.php',
    ]);

$config = new PhpCsFixer\Config();

return $config
->setRules($rules)
->setFinder($finder);
