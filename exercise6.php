<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named ShoppingCart with the following properties:
 * - items (as an array)
 * - total
 * Implement a method to add items to the cart (each item will be in an array with name and price).
 * Implement a method to display all items.
 * Implement a method to calculate the total cost.
 */
class ShoppingCart{
    protected array $items;
    protected int $total;

    public function __construct(array $items, int $total)
    {
        $this->setItems($items);
        $this->setTotal($total);        
    }

    /**
     * Get the value of items
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Set the value of items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get the value of total
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Set the value of total
     */
    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
}