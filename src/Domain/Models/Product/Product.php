<?php


namespace App\Domain\Models\Product;


use JsonSerializable;

class Product implements JsonSerializable
{
    private const IN_STORAGE = 'inStorage';
    private const RESERVED   = 'reserved';
    private const EXPECTED   = 'expected';
    private const SOLD       = 'sold';

    public const STATUSES = [self::IN_STORAGE, self::RESERVED, self::EXPECTED, self::SOLD];

    /** @var int|null */
    private $id;

    /** @var float */
    private $price;

    /** @var string */
    private $name;

    /** @var int */
    private $inStock;

    /** @var int */
    private $reserved;

    /** @var string */
    private $description;

    /** @var array */
    private $characteristics;

    /** @var string */
    private $serialNumber;

    /** @var string */
    private $status;

    /** @var int */
    private $manufacturerId;

    /** @var int */
    private $categoryId;

    /**
     * Product constructor.
     * @param int|null $id
     * @param string $name
     * @param string $description
     * @param int $inStock
     * @param int $reserved
     * @param float $price
     * @param array $characteristics
     * @param string $serialNumber
     * @param string $status
     * @param int $manufacturerId
     * @param int $categoryId
     * @throws InvalidProductStatusException
     */
    public function __construct(
        ?int $id,
        string $name,
        string $description,
        int $inStock,
        int $reserved,
        float $price,
        array $characteristics,
        string $serialNumber,
        string $status,
        int $manufacturerId,
        int $categoryId
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->inStock = $inStock;
        $this->reserved = $reserved;
        $this->price = $price;
        $this->characteristics = $characteristics;
        $this->serialNumber = $serialNumber;
        $this->setStatus($status);
        $this->manufacturerId = $manufacturerId;
        $this->categoryId = $categoryId;
    }

    public function jsonSerialize(): array
    {
        // TODO: Implement jsonSerialize() method.
    }

    public function setStatus(string $status)
    {
        if(!in_array($status, self::STATUSES)) {
            throw new InvalidProductStatusException('Invalid product status');
        }
        $this->status = $status;
    }

    public function getManufacturer() : Manufacturer
    {
        //TODO
    }
}