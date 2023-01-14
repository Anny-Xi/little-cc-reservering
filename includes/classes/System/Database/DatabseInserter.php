<?php namespace System\Database;

use System\ProductList\Product;

/**
 * Class DatabaseInserter
 * @package System\Databases
 */
class DatabaseInserter extends Database
{
    /**
     * Save a product to the database
     *
     * @param Product $product
     * @return bool
     */
    public function addProduct(Product $product): bool
    {
        $query = 'INSERT INTO product (name_cn, name_en, price, description_cn, description_en, image)
                  VALUES (:name, :artist, :genre, :year, :tracks, :image)';
        $statement = $this->connection->prepare($query);
        return $statement->execute([
            ':name_cn' => $product->name_cn,
            ':name_en' => $product->name_en,
            ':price' => $product->price,
            ':description_cn' => $product->description_cn,
            ':description_en' => $product->description_en,
            ':image' => $product->image
        ]);
    }
}