<?php
namespace App\Domain\Models\Product;


interface ProductRepository
{
    /**
     * @param int $id
     * @return Product
     */
    public function getById(int $id): Product;

    /**
     * @return Product[]
     */
    public function getAll(): array;

    /**
     * @param int $id
     * @return Product[]
     */
    public function getByManufacturer(int $id): array;

    /**
     * @param int $id
     * @return Product[]
     */
    public function getByCategory(int $id): array;

}