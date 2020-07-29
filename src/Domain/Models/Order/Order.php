<?php


namespace App\Domain\Models\Order;


use App\Domain\Models\Product\Product;
use App\Domain\Models\Service\Service;
use App\Domain\Models\User\User;
use JsonSerializable;

class Order implements JsonSerializable
{
    /** @var int|null */
    private $id;

    /** @var string */
    private $title;

    /** @var int */
    private $customerId;

    /** @var int[] */
    private $productIds;

    /** @var int[] */
    private $serviceIds;

    /** @var float */
    private $cost;

    public function __construct(?int $id, int $customerId, string $title, array $productsId, array $serviceIds, float $cost)
    {
        $this->id         = $id;
        $this->customerId = $customerId;
        $this->title      = $title;
        $this->productIds = $productsId;
        $this->serviceIds = $serviceIds;
        $this->cost       = $cost;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getProductIds(): array
    {
        return $this->productIds;
    }

    public function getServiceIds(): array
    {
        return $this->serviceIds;
    }

    public function jsonSerialize(): array
    {
        return [
            'id'         => $this->id,
            'customerId' => $this->customerId,
            'title'      => $this->title,
            'productIds' => $this->productIds,
            'serviceIds' => $this->serviceIds,
            'cost'       => $this->cost
        ];
    }

    /**
     * @return Product[]
     */
    public function getProducts() : array
    {
        //TODO
    }

    /**
     * @return Service[]
     */
    public function getServices(): array
    {
        //TODO
    }

    public function getCustomer() : User
    {
        //TODO
    }
}