<?php

namespace EdvGraz\CMS;

use PDOException;

class User
{
    protected Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function fetch(int $id): array
    {
        $sql = "SELECT forename, surname, joined, profile_pic FROM user WHERE id = :id;";
        return $this->db->sql_execute($sql, ['id' => $id])->fetch();
    }

    public function getAll(int $limit = 1000): array
    {
        $sql = "SELECT id, forename, surname, joined, profile_pic FROM user ORDER BY id DESC LIMIT :limit;";
        return $this->db->sql_execute($sql, ['limit' => $limit])->fetchAll();
    }

    public function addUser(array $user): bool
    {
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO user (forename, surname, email, password)
				VALUES (:forename, :surname, :email, :password);";
            $this->db->sql_execute($sql, $user);

            return true;
        } catch (PDOException $e) {
            if ($e->errorInfo[1] === 1062) {
                return false;
            }
            throw $e;
        }
    }

    public function login(string $email, string $password): false|array
    {
        $sql  = "SELECT id, forename, surname, joined, email, password, profile_pic, role
				FROM user
				WHERE email = :email;";
        $user = $this->db->sql_execute($sql, ['email' => $email])->fetch();
        if (!$user) {
            return false;
        }
        if (password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }

    public function count()
    {
        $sql = "SELECT COUNT(id) as count
				FROM user;";

        return $this->db->sql_execute($sql)->fetchColumn();
    }

    public function getUserIdByEmail(string $email)
    {
        $sql = "SELECT id
				FROM user
				WHERE email = :email;";

        return $this->db->sql_execute($sql, ['email' => $email])->fetchColumn();
    }

    public function updatePassword(string $id, string $password): bool
    {
        $sql = "UPDATE user
				SET password = :password
				WHERE id = :id;";
        $this->db->sql_execute($sql, ['id' => $id, 'password' => password_hash($password, PASSWORD_DEFAULT)]);

        return true;
    }
}
