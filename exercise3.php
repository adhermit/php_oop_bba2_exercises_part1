<?php

/**
 * INSTRUCTIONS:
 * Import the file from exercise2 to have access to the Person class.
 * Write a class named Employee that inherits from the Person class,
 * and adds the properties salary and position.
 * Override the constructor and call the parent constructor.
 * Override the displayInfos() method to display the salary and position.
 */
require_once "exercise2.php";

class Employee extends Person{
    private float $salary;
    private string $position;

    public function __construct(string $firstName, string $lastName, int $age, float $salary, string $position)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->setSalary($salary);
        $this->setPosition($position);
    }

    

    /**
     * Get the value of salary
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function displayInfo(){
        return parent::displayInfo()." I am working as $this->position. And my salary is $this->salary.";
    }
}

$emplpoye1 = new Employee("Raman","Maharjan", 21, 35000, "Asistant");

echo $emplpoye1->displayInfo();