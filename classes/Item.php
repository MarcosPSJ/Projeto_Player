 <?php

class Item
{
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setName(string $name): void {
        if (empty($name)) {
            $this->name = "Inválido";
        } else {
            $this->name = $name;
        }
    }

    public function getTamanho():int {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void {
        if ($tamanho < 0) {
            $this->tamanho = 0;
        } else {
            $this->tamanho = $tamanho;
        }
    }

    public function getClasse():string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        if (empty($classe)) {
            $this->classe = "Inválido";
        } else {
            $this->classe = $classe;
        }
    }
}