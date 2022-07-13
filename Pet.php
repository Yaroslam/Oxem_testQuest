<?php

abstract class Pet
{


    abstract public function getProduct();

    public function getType(){
        return static::$type;
    }

    public function getProductionType(){
        return static::$productionType;
    }

}