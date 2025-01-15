<?php
/*
 * INSTRUCTIONS:
 * Create a Game class with the following protected properties:
 * - name
 * - editor
 * - price
 * Add the getters and setters for each property.
 * Below the class, instantiate a Game and display its information.
*/
class Game
{
    private string $name;
    private string $editor;
    private float $price;

    public function __construct(string $name, string $editor, float $price)
    {
        $this->setName($name);
        $this->setEditor($editor);
        $this->setPrice($price);
    }


    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of editor
     */
    public function getEditor(): string
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     */
    public function setEditor(string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}

$game1 = new Game("COD", "Activation", 250000);
?>
<p>Welcome to the <?= $game1->getName()?> </p>
<p>Editor: <?= $game1->getEditor()?></p>
<p>Price for this game is: <?= $game1->getPrice()?></p>