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

// Adiciona/remove um livro lido
$app->post('/livro/ler', function ($request, $response) {
    $result = $this->get('UserBookFavoriteService')->verify($request);

    if ($result) {
        return $this->response->withStatus(201);
    }

    return $this->response->withStatus(200);
});

$app->get('/livro/ler/{user}/{book}', function ($request, $response, $args) {
    $result = $this->get('UserBookFavoriteService')->findOneByUserAndBook($args['user'], $args['book']);

    return $this->response->withJson($result);
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
 * Séries
 */

// Retorna todas as séries
$app->get('/series', function ($request, $response, $args) {
    return $this->response->withJson($this->get('SerieService')->findAll());
});

// Retorna uma série específica
$app->get('/series/[{id}]', function ($request, $response, $args) {
    return $this->response->withJson($this->get('SerieService')->findOneById($args['id']));
});

// Adiciona um série
$app->post('/series', function ($request, $response) {
    $this->get('SerieService')->insert($request);
});

// Exclui uma série
$app->delete('/series/[{id}]', function ($request, $response, $args) {
    $this->get('SerieService')->delete($args['id']);
});

// Atualiza uma série
$app->put('/series/[{id}]', function ($request, $response, $args) {
    $this->get('SerieService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});

 /*
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

    return $this->response->withStatus(201);
});

// Exclui um usuario
$app->delete('/usuario/[{id}]', function ($request, $response, $args) {
    $this->get('UserService')->delete($args['id']);

    return $this->response->withStatus(200);
});

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
