<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named Person with protected properties first_name, last_name, and age.
 * Add a constructor.
 * Add the getters and setters.
 * Add a method displayInfos() to display the person's information.
 * Create a new object and display its information.
 */

class Person
{
    protected string $firstName;
    protected string $lastName;
    protected int $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
    }



    /**
     * Get the value of firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getName(){
        return $this->firstName . ' ' .$this->lastName; 
    }

    public function displayInfo()
    {
        return "Hello my name is $this->firstName $this->lastName. I am $this->age years old.";
    }
}

$person1 = new Person("Raman", "Maharjan", 21);

echo $person1->displayInfo();
