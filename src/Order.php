<?php

class Order
{
    private int $id;
    private User $user;
    private array $products = [];

    public function __construct(int $id, User $user)
    {
        $this->id   = $id;
        $this->user = $user;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getId(): int
    {
        return $this->id;
    }
}