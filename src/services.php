<?php

$container = $app->getContainer();

$container['BookService'] = function ($container) {
    return new \api\services\Book($container);
};

$container['MovieService'] = function ($container) {
    return new \api\services\Movie($container);
};

<<<<<<< HEAD
$container['SerieService'] = function ($container) {
    return new \api\services\Serie($container);
=======
$container['UserService'] = function ($container) {
    return new \api\services\User($container);
>>>>>>> f680f1550b27b204132046bff74134e499a9b334
};
