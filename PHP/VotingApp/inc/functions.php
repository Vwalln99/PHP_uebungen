<?php
class Product
{
    public string $id;
    public string $title;
    public string $filename;
    public int $upvote;
    public int $downvote;

    public function __construct(string $id, string $title, string $filename, int $upvote, int $downvote)
    {
        $this->id = $id;
        $this->title = $title;
        $this->filename = $filename;
        $this->upvote = $upvote;
        $this->downvote = $downvote;
    }

    public function getVotingValue()
    {
        return $this->upvote - $this->downvote;
    }
}

class ProductDatabaseCaller
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllProducts()
    {
        $stmt = $this->db->query("select * from products order by (upvotes - downvotes) desc");
        $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $products[] = new Product($row['id'], $row['title'], $row['filename'], $row['upvotes'], $row['downvotes']);
        }

        return $products;
    }

    public function addProduct($title, $filename)
    {
        $stmt = $this->db->prepare("insert into products (title,filename) values (:title, :filename)");
        $stmt->execute(['title' => $title, 'filename' => $filename]);
    }

    public function deleteProduct($id)
    {
        $stmt = $this->db->prepare("delete from products where id=:id");
        $stmt->execute(["id" => $id]);
    }
    public function updateProduct($id, $title)
    {
        $stmt = $this->db->prepare("update products set title = :title where id =:id");
        $stmt->execute(["id" => $id, "title" => $title]);
    }
    public function getProductById($id)
    {
        $stmt = $this->db->prepare("select * from products where id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Product($row['id'], $row['title'], $row['filename'], $row['upvotes'], $row['downvotes']);
        }

        return null;
    }
    public function upvoteProduct($id)
    {
        $stmt = $this->db->prepare("update products set upvotes = upvotes + 1 where id = :id");
        $stmt->execute(['id' => $id]);
    }
    public function downvoteProduct($id)
    {
        $stmt = $this->db->prepare("update products set downvotes = downvotes + 1 where id = :id");
        $stmt->execute(['id' => $id]);
    }
}
