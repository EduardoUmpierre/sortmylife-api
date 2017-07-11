<?php

namespace api\services;

use Slim\Container;

class Serie
{
    private $db;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->db = $container->db;
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        $query = $this->db->prepare('SELECT * FROM serie ORDER BY id DESC');
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id)
    {
        $query = $this->db->prepare('SELECT * FROM serie WHERE id = :id');
        $query->bindParam('id', $id);
        $query->execute();

        return $query->fetchObject();
    }

    /**
     * @param $request
     */
    public function insert($request)
    {
        $input = $request->getParsedBody();
        $query = $this->db->prepare('INSERT INTO serie (title, rating, author, description, image, year, created_at)
VALUES (:title, :rating, :author, :desc, :image, :year, NOW())');
        $query->bindParam('title', $input['title']);
        $query->bindParam('rating', $input['rating']);
        $query->bindParam('author', $input['author']);
        $query->bindParam('desc', $input['description']);
        $query->bindParam('image', $input['image']);
        $query->bindParam('year', $input['year']);
        $query->execute();

        return;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM serie WHERE id = :id');
        $query->bindParam('id', $id);
        $query->execute();

        return;
    }

    /**
     * @param $id
     * @param $request
     */
    public function update($id, $request)
    {
        $input = $request->getParsedBody();

        $sql = 'UPDATE serie SET title = :title, rating = :rating, author = :author, description = :desc, image = :image,
year = :year WHERE id = :id';

        $query = $this->db->prepare($sql);
        $query->bindParam('id', $id);
        $query->bindParam('title', $input['title']);
        $query->bindParam('rating', $input['rating']);
        $query->bindParam('author', $input['author']);
        $query->bindParam('desc', $input['description']);
        $query->bindParam('image', $input['image']);
        $query->bindParam('year', $input['year']);
        $query->execute();

        return;
    }
}