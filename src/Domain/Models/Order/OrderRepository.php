<?php
namespace App\Domain\Models\Order;


interface OrderRepository
{
    /**
     * @param int $id
     * @return Order[]
     */
    public function getByCustomerId(int $id) : array;

    /**
     * @param int $id
     * @return Order
     */
    public function getById(int $id) : Order;

    /**
     * @param int $productId
     * @return Order[]
     */
    public function getByProductId(int $productId) : array;

    /**
     * @param Order $order
     */
    public function save(Order $order): void;

}
