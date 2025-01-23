<?php

require("type.php");
require("connexpdo.php");

class Pokemon {
    private int $id;
    private string $name;
    private int $height;
    private int $weight;
    
    private $type = [];
    
    public function __construct($id,$name,$height,$weight,$type) {
        $this->id=$id;
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
        $this->type[]= $type;
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function setTaille($val) {
        $this->height = $val;
    }
    
    public function setPoids($val) {
        $this->weight = $val;
    }
    
    public function getName() : string {
        return $this->name;
    }
    
}


function pok_test() {
    $pdo = getbdd("pokemon");
    $query = "SELECT p.pok_id,pok_name,pok_height,pok_weight,t.type_id,t.type_name 
        FROM (pokemon p JOIN pokemon_types pt ON p.pok_id=pt.pok_id) JOIN types t ON t.type_id=pt.type_id ORDER By p.pok_name";
        
    $pokedex = [];
    
    $result = $pdo->query($query);

    while ($ligne = $result->fetchObject()) {
            $typ = new Type($ligne->type_id,$ligne->type_name);
            $pok =  new Pokemon($ligne->pok_id,$ligne->pok_name,$ligne->pok_height,$ligne->pok_weight,$typ);

            array_push($pokedex,$pok);
    }
    return $pokedex;
}
?>
