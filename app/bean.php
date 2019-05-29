<?php declare(strict_types=1);

use Swoft\Http\Server\Swoole\RequestListener;
use Swoft\Server\Swoole\SwooleEvent;

return [
    'cliRouter'     => [
        'idAliases' => [
            // 'run' => 'serve:run'
        ],
    ],
    'httpServer' => [
        /** @see \Swoft\Http\Server\HttpServer::$setting */
        'setting' => [
            'log_file' => alias('@runtime/swoole-for-scli.log'),
        ],
    ],
    // 'wsServer'   => [
    //     'on'      => [
    //         // Enable http handle
    //         SwooleEvent::REQUEST => bean(RequestListener::class),
    //     ],
    //     'debug' => env('SWOFT_DEBUG', 1),
    //     'setting' => [
    //         'log_file' => alias('@runtime/swoole.log'),
    //     ],
    // ],
];
