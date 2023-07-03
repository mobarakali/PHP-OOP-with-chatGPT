<?php
    // 1. Create a Class called Person
    class Person{
        // 2. Add a property called $name
        public $name;
        // 3. Add a method called getName() that will return the person's name
        public function getName(){
            return $this->name;
        }
    }

    // 4. Create a new instance of Person and set the name to 'John'
    $person = new Person();
    $person->name = 'John';

    // 5. Echo out the person's name
    echo $person->getName();
?>
