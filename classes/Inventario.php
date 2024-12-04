<?php 

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct() {
        $this->capacidadeMaxima = 20;
    }

    public function getCapacidadeMaxima(): int{
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $novaCapacidade): void {
        if ($novaCapacidade > 20){
            $this->capacidadeMaxima = $novaCapacidade;
        } else{
            $this->capacidadeMaxima = 20;
        }
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function setItens(array $itens): void {
        $this->itens = $itens;
    }
    
    public function capacidadeLivre(): int{
        $espacoOcupado = 0;
        foreach ($this->itens as $index) {
            $espacoOcupado += $index->getTamanho();
        }
        return ($this->capacidadeMaxima - $espacoOcupado);
    }
    
    public function adicionarItem(Item $itens){
        if($this->capacidadeLivre() == 0){
            echo "Inventário cheio!";
        }else {
            if($this->capacidadeLivre() < $itens->getTamanho()){
                echo"Item ultrapassa capacidade  maxima do inventario! <br>";
            }else{
                $this->itens[] = $itens;
            }     
        }
        
    }
    
    public function removerItem(Item $item){
        foreach ($this->itens as $index) {
            if($item == $index->getName()){
                unset($this->itens[$index]);
                break;
            }
        }
    }
    
    
}

?>