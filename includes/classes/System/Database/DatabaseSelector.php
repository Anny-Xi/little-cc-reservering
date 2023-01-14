<?php

namespace System\Database;

use System\ProductList\Product;

class DatabaseSelector extends Database
{
    /**
     * Get all product from the database
     *
     * @return array
     */
    public function getProducts(): array
    {
        return $this->connection->query('SELECT * FROM products')->fetchAll(\PDO::FETCH_CLASS, '\\System\\ProductList\\Product');
    }

    /**
     * Get a specific product by its ID
     *
     * @param int $id
     * @return Product
     * @throws \Exception
     */
    public function getProductById(int $id): Product
    {
        $statement = $this->connection->prepare('SELECT * FROM products WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($product = $statement->fetchObject('\\System\\ProductList\\Product')) === false) {
            throw new \Exception('ID is not available in the database');
        }

        return $product;
    }
}