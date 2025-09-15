<?php

class Animal {
    public function sound() {
        echo "Some generic animal sound\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Woof! Woof!\n";
    }
}

class Puppy extends Dog {
    public function play() {
        echo "Puppy is playing\n";
    }
}

$puppy = new Puppy();
$puppy->sound();
$puppy->bark();
$puppy->play();

?>
