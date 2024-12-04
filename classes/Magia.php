<?php

class Magia extends Item
{
    public function __construct(string $name) {
        parent::__construct($name);
        $this->setTamanho(2);
        $this->setClasse("Magia");
    }
}
