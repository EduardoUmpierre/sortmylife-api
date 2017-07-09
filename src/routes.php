<?php

/**
 * Livros
 */

// Retorna todos os livros
$app->get('/livros', function ($request, $response, $args) {
    return $this->response->withJson($this->get('BookService')->findAll());
});

// Retorna uma tarefa específica
$app->get('/livro/[{id}]', function ($request, $response, $args) {
    return $this->response->withJson($this->get('BookService')->findOneById($args['id']));
});

// Adiciona uma tarefa
$app->post('/livro', function ($request, $response) {
    $this->get('BookService')->insert($request);

    return $this->response->withStatus(201);
});

// Exclui uma tarefa
$app->delete('/livro/[{id}]', function ($request, $response, $args) {
    $this->get('BookService')->delete($args['id']);

    return $this->response->withStatus(200);
});

// Atualiza uma tarefa
$app->put('/livro/[{id}]', function ($request, $response, $args) {
    $this->get('BookService')->update($args['id'], $request);

    return $this->response->withStatus(200);
});
