<?php
include_once'Pet.php';

class Cow extends Pet
{
    protected static $type = "Cow";
    protected static $productionType = "Milk";

    public function getProduct(){
        return rand(8,12);
    }



}