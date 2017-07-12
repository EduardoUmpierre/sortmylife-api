<?php

/**
 * Livros
 */

// Retorna todos os livros
$app->get('/livros', function ($request, $response, $args) {
    return $this->response->withJson($this->get('BookService')->findAll());
});

// Retorna um livro específico
$app->get('/livro/[{id}]', function ($request, $response, $args) {
    return $this->response->withJson($this->get('BookService')->findOneById($args['id']));
});

// Adiciona um livro
$app->post('/livro', function ($request, $response) {
    $this->get('BookService')->insert($request);

    return $this->response->withStatus(201);
});

// Exclui um livro
$app->delete('/livro/[{id}]', function ($request, $response, $args) {
    $this->get('BookService')->delete($args['id']);

    return $this->response->withStatus(200);
});

// Atualiza um livro
$app->put('/livro/[{id}]', function ($request, $response, $args) {
    $this->get('BookService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});

/**
 * Filmes
 */

// Retorna todos os filmes
$app->get('/filmes', function ($request, $response, $args) {
    return $this->response->withJson($this->get('MovieService')->findAll());
});

// Retorna um filme específico
$app->get('/filme/[{id}]', function ($request, $response, $args) {
    return $this->response->withJson($this->get('MovieService')->findOneById($args['id']));
});

// Adiciona um filme
$app->post('/filme', function ($request, $response) {
    $this->get('MovieService')->insert($request);

    return $this->response->withStatus(201);
});

// Exclui um filme
$app->delete('/filme/[{id}]', function ($request, $response, $args) {
    $this->get('MovieService')->delete($args['id']);

    return $this->response->withStatus(200);
});

// Atualiza um filme
$app->put('/filme/[{id}]', function ($request, $response, $args) {
    $this->get('MovieService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});

/**
<<<<<<< HEAD
 * Séries
 */

// Retorna todos os livros
$app->get('/series', function ($request, $response, $args) {
    return $this->response->withJson($this->get('SerieService')->findAll());
});

// Retorna um livro específico
$app->get('/series/[{id}]', function ($request, $response, $args) {
    return $this->response->withJson($this->get('SerieService')->findOneById($args['id']));
});

// Adiciona um livro
$app->post('/series', function ($request, $response) {
    $this->get('SerieService')->insert($request);
=======
 * Usuarios
 */

// Retorna todos os usuarios
$app->get('/usuarios', function ($request, $response, $args) {
    return $this->response->withJson($this->get('UserService')->findAll());
});

// Retorna um usuario específico
$app->get('/usuario/[{id}]', function ($request, $response, $args) {
    return $this->response->withJson($this->get('UserService')->findOneById($args['id']));
});

// Adiciona um usuario
$app->post('/usuario', function ($request, $response) {
    $this->get('UserService')->insert($request);
>>>>>>> f680f1550b27b204132046bff74134e499a9b334

    return $this->response->withStatus(201);
});

<<<<<<< HEAD
// Exclui um livro
$app->delete('/series/[{id}]', function ($request, $response, $args) {
    $this->get('SerieService')->delete($args['id']);
=======
// Exclui um usuario
$app->delete('/usuario/[{id}]', function ($request, $response, $args) {
    $this->get('UserService')->delete($args['id']);
>>>>>>> f680f1550b27b204132046bff74134e499a9b334

    return $this->response->withStatus(200);
});

<<<<<<< HEAD
// Atualiza um livro
$app->put('/series/[{id}]', function ($request, $response, $args) {
    $this->get('SerieService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});
=======
// Atualiza um usuario
$app->put('/usuario/[{id}]', function ($request, $response, $args) {
    $this->get('UserService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});

// Verifica o login
$app->post('/login', function ($request, $response) {
    $login = $this->get('UserService')->verifyLogin($request);

    if ($login) {
        return $response->withJson($login, 200);
    }

    return $this->response->withStatus(401);
});
>>>>>>> f680f1550b27b204132046bff74134e499a9b334
