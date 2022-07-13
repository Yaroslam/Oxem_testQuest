<?php
class Farm
{
    public $pets = [];
    private $lastUid = [];
    private $petsCount = [];
    private $productionCount = [];

    public function addPet(Pet $pet){
        $petType = $pet->getType();
        if (array_key_exists($petType, $this->lastUid)){
            $this->lastUid[$petType] += 1;
            $this->petsCount[$petType] += 1;
        }
        else{
            $this->lastUid[$petType] = 1;
            $this->petsCount[$petType] = 1;
        }
        $uId = $petType.$this->lastUid[$petType];
        $this->pets[$uId] = $pet;
    }

    
    public function getDailyProduction(){
        foreach($this->pets as $pet){
            $productionType = $pet->getProductionType();
            if (array_key_exists($productionType, $this->productionCount)){
                $this->productionCount[$productionType] += $pet->getProduct();
            }
            else{
                $this->productionCount[$productionType] = $pet->getProduct();
            }
        }
    }


    public function printPets(){
        $petsTypes = array_keys($this->petsCount);
        foreach($petsTypes as $type){
            echo $type." ".$this->petsCount[$type]."\n";
        }
    }

    public function printProducts(){
        $productsTypes = array_keys($this->productionCount);
        foreach($productsTypes as $type){
            echo $type." ".$this->productionCount[$type]."\n";
        }
    }

    public function deletePet($petUID){
        $pet = $this->pets[$petUID];
        $petType = $pet->getType();
        $this->petsCount[$petType]-=1;
        unset($this->pets[$petUID]);
    }

}