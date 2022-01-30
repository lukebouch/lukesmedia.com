<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Luke\'s Media',
    'description' => 'Exceptional websites designed from the ground up to grow your business.',
    'collections' => [],

    // Helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path)) || $page->getUrl() == $path;
    },
];
