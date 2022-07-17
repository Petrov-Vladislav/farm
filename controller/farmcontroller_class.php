<?php
class FarmController {
    public $cow;
    public $chicken;

    public function __construct($cow = 10, $chicken = 20)
    {
        $this->cow = $cow;
        $this->chicken = $chicken;
    }

    public function getListAnimal($cow, $animal) {
        for ($i = 1; $i<=$cow; $i++) {  
            echo $animal.' '.$i.', ';
        }   
    }

    public function newAnimal($typeAnimal, $amountAnimal) {
        if ($typeAnimal == 'корова') {
            $this->cow = $this->cow + $amountAnimal;
            echo "Съездили на рынок купили ".$amountAnimal." корову";
        } elseif ($typeAnimal == 'курица') {
            $this->chicken = $this->chicken + $amountAnimal;
            echo "Съездили на рынок купили ".$amountAnimal." кур";
        } else echo "Съездили на рынок купили ".$amountAnimal." шт. животного - ".$typeAnimal;
    }

}

?>
