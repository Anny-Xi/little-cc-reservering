<?php namespace System\ProductList;

class AllList
{
    private array $products = [];

    /**
     * @return mixed
     */

    public function get(): array
    {
        return $this->products;
    }

    /**
     * @param Product[] $products
     */
    public function set(array $products): void
    {
        $this->products = $products;
    }

    /**
     * @param Product $product
     */
    public function add(Product $product): void
    {
        $this->products[] = $product;
    }


    /**
     * @return int
     */
    public function getTotal(): int
    {
        return count($this->products);
    }
}