<?php 

class Animal{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function makeSound(){
        return "Animal Sound";
    }
}

class Dog extends Animal{
    public function makeSound(){
        return "Woof Woof";
    }
}
class Cat extends Animal{
    public function makeSound(){
        return "Mew Mew";
    }
}
class Cow extends Animal{
    public function makeSound(){
        return "Hamba Hamba";
    }
}
$animalOne = new Dog("Dog");
$animalTwo = new Cat("Cat");
$animalThree = new Cow("Cow");

echo $animalOne->name . " sound is ". $animalOne->makeSound(). ", ";
echo $animalTwo->name . " sound is ". $animalTwo->makeSound(). ", ";
echo $animalThree->name . " sound is ". $animalThree->makeSound(). ", ";



