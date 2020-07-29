<?php


namespace App\Domain\Models\Service;


use JsonSerializable;

class Service implements JsonSerializable
{
    /** @var int|null */
    private $id;

    /** @var string */
    private $name;

    /** @var float */
    private $cost;

    /** @var string */
    private $description;

    public function __construct(?int $id, string $name, float $cost, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cost = $cost;
        $this->description = $description;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}