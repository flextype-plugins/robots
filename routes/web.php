<?php

namespace Flextype;

use Flextype\Component\Filesystem\Filesystem;

$app->get('/robots.txt', function() {
    return Filesystem::read(PATH['plugins'] . '/robots/robots.txt');
})->setName('site.index');
