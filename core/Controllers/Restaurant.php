<?php

namespace Controllers;

class Restaurant extends Controller {

    protected $modelName = \Model\Restaurant::class;

    public function indexApi()
    
    {
        

          
        
           


      $restaurant = $this->model->findAll($this->modelName);

     
     
      header('Access-Control-Allow-Origin: *');

      
      echo json_encode($restaurant);


           }


           public function showApi()
    {

    



             $restaurant_id= null;

            if(!empty($_GET['id']) && ctype_digit($_GET['id'])){


                $restaurant_id = $_GET['id'];
            }


        
        
        
    $restaurant = $this->model->find($restaurant_id, $this->modelName);
           
        
        

     
  
        $modelPlat = new \Model\Plat();
       
        
        $plats = $modelPlat->findAllByRestaurant($restaurant_id , \Model\Plat::class);
        
        
        
          
       
           header('Access-Control-Allow-Origin: *');
            echo json_encode(
                [
                'restaurant' => $restaurant, 
                'plats' => $plats
                ]
                );


    }

}