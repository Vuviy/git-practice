<?php

class Cart
{
    private array $items = [];

    public function addItem(Product $product): void
    {
        $this->items[] = $product;
    }

    public function getCount(): int
    {
        return count($this->items);
    }
}