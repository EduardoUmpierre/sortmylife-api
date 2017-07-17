<?php

$container = $app->getContainer();

$container['BookService'] = function ($container) {
    return new \api\services\Book($container);
};

$container['MovieService'] = function ($container) {
    return new \api\services\Movie($container);
};

$container['SerieService'] = function ($container) {
    return new \api\services\Serie($container);
};

$container['UserService'] = function ($container) {
    return new \api\services\User($container);
};

$container['UserBookFavoriteService'] = function ($container) {
    return new \api\services\UserBookFavorite($container);
};
