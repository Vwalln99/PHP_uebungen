<?php

namespace EdvGraz\CMS;

use PDOException;

class Category
{
    protected Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function fetch(int $id): array
    {
        $sql = "select id, name, description, navigation, seo_title from category where id =:id;";
        return $this->db->sql_execute($sql, ['id' => $id])->fetch();
    }
    public function getAll(): array
    {
        $sql = "select id, name, navigation from category;";
        return $this->db->sql_execute($sql)->fetchAll();
    }

    public function fetchNavigation(): array
    {
        $sql = "select id, name, seo_title from category where navigation=1;";
        return $this->db->sql_execute($sql)->fetchAll();
    }
    public function count(): int
    {
        $sql = "select count(id) from category";
        return $this->db->sql_execute($sql)->fetchColumn();
    }

    public function push(array $data): bool
    {
        try {
            $sql = "insert into category (name, description, navigation) values (:name, :description, :navigation);";
            $this->db->sql_execute($sql, $data);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function update(array $data): bool
    {
        try {
            $sql = "update category set name=:name, description=:description, navigation=:navigation where id=:id;";
            $this->db->sql_execute($sql, $data);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function delete(int $id): bool
    {
        try {
            $sql = "delete from category where id =:id;";
            $this->db->sql_execute($sql, ['id' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
