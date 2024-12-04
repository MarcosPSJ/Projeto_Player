<?php
require_once('Item.php');

class Ataque extends Item 
{

    public function __construct(string $name) {
        parent::__construct($name);
        $this->setTamanho(7);
        $this->setClasse("Ataque");
    }
}
