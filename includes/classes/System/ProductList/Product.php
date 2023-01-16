<?php namespace System\ProductList;

class Product
{
    public int $id;
    public int $category_id;
    public string $name_cn= '';
    public string $name_en = '';
    public float $price;
    public string $description_cn = '';
    public string $description_en = '';
    public string $image;

    /**
     * @param \PDO $db
     * @return bool
     */
    public function update(\PDO $db): bool
    {
        $query = 'UPDATE product
                  SET category_id = :category_id, name_cn = :name_cn, name_en = :name_en, price = :price, description_cn = :description_cn, description_en = :description_en, image = :image
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            'category_id' =>$this->category_id,
            ':name_cn' => $this->name_cn,
            ':name_en' => $this->name_en,
            ':price' => $this->price,
            ':description_cn' => $this->description_cn,
            ':description_en' => $this->description_en,
            ':image' => $this->image,
            ':id' => $this->id
        ]);
    }

    /**
     * @param \PDO $db
     * @return bool
     */
    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM product
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }


}