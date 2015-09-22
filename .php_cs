<?php

use Symfony\CS\FixerInterface;

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in([__DIR__ .'/src', __DIR__ .'/spec'])
;


return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(FixerInterface::SYMFONY_LEVEL)
    ->fixers(['strict_param', 'short_array_syntax'])
    ->finder($finder)
;

