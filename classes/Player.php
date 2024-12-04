<?php 
require_once('Inventario.php');
require_once('Item.php');

class Player
{
    private string $nickname;
    private int $nivel = 1;
    private Inventario $inventario;

    public function __construct(string $nickname, $inventario) {
        $this->nickname = $nickname;
        $this->inventario = new Inventario($inventario);
    }
        
    public function getNickname():string {
        return $this->nickname;
    }
    
    public function setNickname(string $nickname): void {
        if (empty($nickname)) {
            $this->$nickname = "Inválido";
        } else {
            $this->$nickname = $nickname;
        }
    }    

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel <= 0) {
            $this->$nivel = 1;
        } else {
            $this->$nivel = $nivel;
        }
    }

    public function getInventario(): Inventario{
        return $this->inventario;
    }

    public function setInventario($inventario): void {
        $this->inventario = new Inventario($inventario);
        
    }

    public function coletarItem(Item $item){
        ($this->inventario)->adicionarItem($item);
        echo "{$this->getNickname()} coletou o item: {$item->getName()}<br>";
    }
    public function soltarItem(Item $item){
        ($this->inventario)->removerItem($item);
    }

    public function subirNivel(int $subir_nivel){
        if($this->nivel > $subir_nivel){
            echo"Não possui EXP o suficiente!";
        } else{
            $this->nivel = $subir_nivel;
            $setDaCapacidade = (3 * $subir_nivel) + ($this->inventario)->getCapacidadeMaxima();
            ($this->inventario)->setCapacidadeMaxima($setDaCapacidade);
        }
    }   

    public function infoPlayer(){
        echo"Nickname: {$this->getNickname()} <br>";
        echo"Nivel atual {$this->getNivel()}";
    }


}

?>