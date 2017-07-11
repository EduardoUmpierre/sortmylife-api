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

    return $this->response->withStatus(201);
});

// Exclui um livro
$app->delete('/series/[{id}]', function ($request, $response, $args) {
    $this->get('SerieService')->delete($args['id']);

    return $this->response->withStatus(200);
});

// Atualiza um livro
$app->put('/series/[{id}]', function ($request, $response, $args) {
    $this->get('SerieService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});