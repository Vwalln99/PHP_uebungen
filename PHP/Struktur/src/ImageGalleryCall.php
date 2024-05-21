<?php

class ImageGalleryCall
{
    private PDO $pdo;
    private string $upload_dir;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->upload_dir = "/uploads/img/";
    }

    public function fetchAll(): array
    {
        $stmt = $this->pdo->query("select * from images order by id");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, Image::class);
    }

    public function handleUpload(string $file_name, string $alt, string $tmp_path,): void
    {
        $path = get_file_path($file_name, $this->upload_dir);
        $final_filename = pathinfo($path, PATHINFO_BASENAME);
        scale_and_copy($tmp_path, $path);
        $stmt = $this->pdo->prepare('insert into images(file_name, alt) values(:filename, :alt_text)');
        $stmt->execute(['filename' => $final_filename, 'alt_text' => $alt]);
    }

    public function fetchImageById(string $id): Image|bool
    {
        $stmt = $this->pdo->prepare('select * from images where id=:id');
        if (!$stmt) {
            return false;
        }
        $stmt->execute([':id' => $id]);
        return $stmt->fetchObject(Image::class);
    }

    public function deleteImage(string $id): void
    {
        $file_name = $this->fetchImageById($id)->file_name;
        $stmt = $this->pdo->prepare('delete from images where id=:id');
        $stmt->execute(['id' => $id]);
        if ($file_name) {
            unlink(dirname(__DIR__) . $this->upload_dir . $file_name);
        }
    }

    public function updateAltText(string $id,  string $alt)
    {
        $file_name = $this->fetchImageById($id)->file_name;
        $stmt = $this->pdo->prepare('update images set alt = :alt where id = :id');
        $stmt->execute(['alt' => $alt, 'id' => $id]);
        if ($file_name) {
            unlink(dirname(__DIR__) . $this->upload_dir . $file_name);
        }
    }
}
