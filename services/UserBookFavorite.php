<?php

namespace api\services;

use Slim\Container;

class UserBookFavorite
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
     * @param $user
     * @param $book
     */
    public function findOneByUserAndBook($user, $book)
    {
        $query = $this->db->prepare('SELECT u.id FROM user_book_favorite u WHERE id_user = :user AND id_book = :book');
        $query->bindParam('user', $user);
        $query->bindParam('book', $book);
        $query->execute();

        return $query->fetchObject();
    }

    /**
    * @param $user
    * @param $book
     */
    public function insert($user, $book)
    {
        $query = $this->db->prepare('INSERT INTO user_book_favorite (id_user, id_book, created_at)
VALUES (:user, :book, NOW())');
        $query->bindParam('user', $user);
        $query->bindParam('book', $book);
        $query->execute();

        return;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM user_book_favorite WHERE id = :id');
        $query->bindParam('id', $id);
        $query->execute();

        return;
    }

    /**
     * @param $request
     */
    public function verify($request)
    {
        $input = $request->getParsedBody();
        $user = $input['user'];
        $book = $input['book'];

        $favorite = self::findOneByUserAndBook($user, $book);

        if (!$favorite) {
            self::insert($user, $book);
        } else {
            self::delete($favorite->id);
        }

        return !$favorite;
    }
}
