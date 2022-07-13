<?php
include_once 'Pet.php';



class Chicken extends Pet
{
    protected static $type = "Chicken";
    protected static $productionType = "Egg";

    public function getProduct(){
        return rand(0,1);
    }


}