<?php 
require_once('./classes/Ataque.php');
require_once('./classes/Defesa.php');
require_once('./classes/Magia.php');
require_once('./classes/Player.php');
require_once('./classes/Item.php');
require_once('./classes/Inventario.php');

// Criando players
$zequinha = new Player("Zequinha", new Inventario());

$bruninha123 = new Player("Bubu", new Inventario());

// Criando itens
$item1 = new Ataque("Espada");
$item2 = new Ataque("Cutelo");
$item3 = new Defesa("Escudo");
$item4 = new Defesa("Peitoral");
$item5 = new Magia("Poção de vida");
$item6 = new Magia("Anel de elixir");


// Coletando itens
$zequinha->coletarItem($item1);
$zequinha->coletarItem($item3);
$zequinha->coletarItem($item5);

//$bruninha123->coletarItem($item1);
$bruninha123->coletarItem($item2);
$bruninha123->coletarItem($item4);
$bruninha123->coletarItem($item6);



// echo
$plays = [$zequinha, $bruninha123];

echo"<h3>Informações dos Players</h3> <br>";

foreach ($plays as $player) {
    $player->infoPlayer();
    echo"<br>";
    echo "Espaço diponível: {$player->getInventario()->capacidadeLivre()} <br>";
    echo"<br><hr>";

} 


// Colocando um item com um tamamnho superior ao disponivel
//$item1->setTamanho(8);
//$bruninha123->coletarItem($item1);


echo "<h3>Echendo inventário dos players</h3>";

$item7 = new Ataque("Martelo de Thor");

foreach ($plays as $player) {
    $player->coletarItem($item7);
    $player->infoPlayer();
    echo"<br>";
    if($player->getInventario()->capacidadeLivre() == 0 ){
        echo "Inventário cheio! <br>";
    } else{
        echo "Espaço disponivel: ". ($player->getInventario()->capacidadeLivre());
    }

    echo"<br><hr>";

} 

//subindo nivel
echo "<h3>Subindo nivel do player {$bruninha123->getNickname()}</h3>";

$bruninha123->subirNivel(2);
    $bruninha123->infoPlayer();
    echo"<br>";
    if($bruninha123->getInventario()->capacidadeLivre() == 0 ){
        echo "Inventário cheio! <br>";
    } else{
        echo "Espaço disponivel: ". ($bruninha123->getInventario()->capacidadeLivre());
    }



?>