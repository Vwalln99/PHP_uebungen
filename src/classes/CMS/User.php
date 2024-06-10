<?php

namespace EdvGraz\CMS;

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
}
