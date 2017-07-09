<?php

$container = $app->getContainer();

$container['BookService'] = function ($container) {
    return new \api\services\Book($container);
};
