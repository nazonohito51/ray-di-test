<?php

declare(strict_types=1);

namespace RayDiTest\Classes;

class Customer
{
    public function __construct(
        private int $id
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}