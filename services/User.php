<?php

namespace api\services;

use Slim\Container;

class User
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
        $query = $this->db->prepare('SELECT u.id, u.name, u.username, u.email, u.role, u.created_at FROM user u ORDER BY id DESC');
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id)
    {
        $query = $this->db->prepare('SELECT u.id, u.name, u.username, u.email, u.role, u.created_at FROM user u WHERE id = :id');
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

        $password = password_hash($input['password'], PASSWORD_BCRYPT);

        $query = $this->db->prepare('INSERT INTO user (name, username, email, password, role, created_at)
VALUES (:name, :username, :email, :password, :role, NOW())');
        $query->bindParam('name', $input['name']);
        $query->bindParam('username', $input['username']);
        $query->bindParam('email', $input['email']);
        $query->bindParam('password', $password);
        $query->bindParam('role', $input['role']);
        $query->execute();

        return;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM user WHERE id = :id');
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

        $sql = 'UPDATE user SET name = :name, username = :username, email = :email, role = :role';

        if ($input['password'] && !empty($input['password'])) {
            $sql .= ', password = :password';
        }

        $sql .= ' WHERE id = :id';

        $query = $this->db->prepare($sql);
        $query->bindParam('id', $id);
        $query->bindParam('name', $input['name']);
        $query->bindParam('username', $input['username']);
        $query->bindParam('email', $input['author']);
        $query->bindParam('role', $input['role']);

        if ($input['password'] && !empty($input['password'])) {
            $password = password_hash($input['password'], PASSWORD_BCRYPT);

            $query->bindParam('password', $password);
        }

        $query->execute();

        return;
    }

    /**
     * @param $request
     */
    public function verifyLogin($request)
    {
        $input = $request->getParsedBody();

        $query = $this->db->prepare('SELECT u.id, u.name, u.password, u.role FROM user u WHERE u.email = :login OR u.username = :login');
        $query->bindParam('login', $input['login']);
        $query->execute();

        $user = $query->fetchObject();

        if (!empty($user) && password_verify($input['password'], $user->password)) {
            unset($user->password);
            
            return $user; 
        }

        return;
    }
}