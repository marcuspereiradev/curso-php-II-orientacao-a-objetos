<?php

class Animal {

    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function falar() {
        return "Grrr...";
    }
}

class Cachorro extends Animal {

    function falar() {
        return "AU, AU!";
    }
}

class Gato extends Animal {

    function falar() {
        return "Miau!";
    }
}

class Boi extends Animal {

}

$animais = array(new Cachorro('Snoopy'), new Gato('Garfield'), new Boi("Flocos"));

foreach($animais as $animal) {
    print $animal->nome . " disse: " . $animal->falar() . '<br>';
}