<?php

namespace Controllers;

class Plat extends Controller {

    protected $modelName = \Model\Plat::class;


    public function supprApi(){
        $plat_id = null ;

        if(!empty($_POST['id']) && ctype_digit($_POST['id'])){


            $plat_id = $_POST['id'];

            
           
           
        }
        $plat = $this->model->find($plat_id , $this->modelName);

        $this->model->delete($plat_id);

        header("Access-Control-Allow-Origin: *");
    }
}