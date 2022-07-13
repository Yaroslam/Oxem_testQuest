<?php
include_once 'Cow.php';
include_once 'Farm.php';
include_once 'Chicken.php';

$farm = new Farm();

addCows(10, $farm);
addChicken(20, $farm);
printPets($farm);
getProduct(7, $farm);
printProducts($farm);

addChicken(5, $farm);
addCows(1, $farm);
printPets($farm);
getProduct(7, $farm);
printProducts($farm);

function getProduct($days, $farm){
    for($i = 1; $i<=$days; $i++){
        $farm->getDailyProduction();
    }
}

function printPets($farm){
    $farm->printPets();
    echo "----------------\n";
}

function printProducts($farm){
    $farm->printProducts();
    echo "----------------\n";
}

function addCows($count, $farm){
    for($i = 1; $i<=$count; $i++){
        $cow = new Cow();
        $farm->addPet($cow);
    }
}

function addChicken($count, $farm){
    for($i = 1; $i<=$count; $i++){
        $chicken = new Chicken();
        $farm->addPet($chicken);
    }
}