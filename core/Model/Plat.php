<?php
namespace Model;

use PDO;

class Plat extends Model


{

    protected $table = 'plats';

public $id ;

public $name ;

public $price ;

public $description;

public $restaurant_id;


public function findAllByRestaurant($restaurant_id , $className){


    $maRequetePlat = $this->pdo->prepare("SELECT * FROM plats WHERE restaurant_id =:restaurant_id ");
 
    $maRequetePlat->execute(['restaurant_id' => $restaurant_id]);
  
    $items = $maRequetePlat->fetchAll( PDO::FETCH_CLASS, $className);


    return $items;
}




}