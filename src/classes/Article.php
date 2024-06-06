<?php

class Article
{
    protected Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function fetch(int $id, bool $published = true): array
    {
        $sql = "select a.id, a.title, a.summary, a.content, a.created, a.category_id, a.user_id, a.published, c.name as category,
        concat(u.forename, ' ', u.surname) as author,
        i.id as image_id, i.filename as image_file, i.alttext as image_alt
        from articles as a
        join category as c on a.category_id = c.id
        join user as u on a.user_id= u.id
        left join images as i on a.images_id = i.id
        where a.id=:id
        ";

        if ($published) {
            $sql .= "and a.published=1";
        }
        $sql .= ";";

        return $this->db->sql_execute($sql, ['id' => $id])->fetch();
    }

    public function getAll(int $cat_id = null, bool $published = true, int $user_id = null, int $limit = 1000): mixed
    {
        $sql = "select a.id, a.title, a.summary, a.category_id, a.user_id, a.published, c.name as category,
        CONCAT(u.forename, ' ' , u.surname) as author,
        i.filename as image_filename, i.alttext as image_alt
        from articles as a
        join category as c on a.category_id =c.id
        join user as u on a.user_id =u.id
        left join images as i on a.images_id =i.id
        where (a.category_id = :cat_id or :cat_id is NULL)
        and (a.user_id =:user_id or :user_id is NULL)
        ";

        if ($published) {
            $sql .= "and a.published=1";
        }
        $sql .= "order by a.id desc limit :limit;";

        return $this->db->sql_execute($sql, ['cat_id' => $cat_id, 'user_id' => $user_id, 'limit' => $limit])->fetchAll();
    }
}
