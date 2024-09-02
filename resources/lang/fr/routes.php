<?php

return [
    'page' => [
        'index' => '/',
        'show' => '/{page:slug}',
    ],
    'service' => [
        'index' => '/services',
        'show' => '/services/{post:slug}',
    ],
    'blog' => [
        'index' => '/blogue',
        'show' => '/blogue/{post:slug}',
    ],
];
