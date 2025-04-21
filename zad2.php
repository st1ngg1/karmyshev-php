<?php

declare(strict_types=1);

abstract class Animal
{
    protected string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function eat(): void
    {
        echo "{$this->name} ест корм.<br>";
    }

    public function sleep(): void
    {
        echo "{$this->name} спит...<br>";
    }

    abstract public function makeSound(): void;

    public function getInfo(): void
    {
        echo "Имя: {$this->name}, Возраст: {$this->age} лет<br>";
    }
}

class Cat extends Animal
{
    public function makeSound(): void
    {
        echo "{$this->name} говорит: Мяу<br>";
    }
}

class Dog extends Animal
{
    public function makeSound(): void
    {
        echo "{$this->name} говорит: Гав-гав<br>";
    }
}

class Bird extends Animal
{
    public function makeSound(): void
    {
        echo "{$this->name} чирикает: Чирик!<br>";
    }
}

$zoo = [
    new Cat('Барсик', 2),
    new Dog('Рекс', 4),
    new Bird('Кеша', 1),
    new Dog('Бублик', 5),
    new Cat('Снежок', 3),
];

foreach ($zoo as $animal) {
    $animal->getInfo();
    $animal->eat();
    $animal->sleep();
    $animal->makeSound();
    echo '<br>';
}
