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

// $cowcow = new FarmController();

// echo "На ферме находится ".$cowcow->cow." коров и ".$cowcow->chicken." куриц", PHP_EOL;

// $cowcow->getListAnimal($cowcow->cow, 'Корова');

// echo PHP_EOL,"-------------------", PHP_EOL;
// $cowcow->getListAnimal($cowcow->chicken, 'Курица');


// echo PHP_EOL,"-------------------", PHP_EOL;
// $cowcow->getListMilk(8, 12, 7, $cowcow->cow);

// echo "-------------------", PHP_EOL;
// $cowcow->getListEgg(7, 0, 1, $cowcow->chicken);

// echo "-------------------", PHP_EOL;
// $cowcow->newAnimal('корова', 1);
// echo PHP_EOL;
// $cowcow->newAnimal('курица', 5);

// echo PHP_EOL;
// echo "На ферме находится ".$cowcow->cow." коров и ".$cowcow->chicken." куриц", PHP_EOL;


// echo "-------------------", PHP_EOL;
// $cowcow->getListMilk(8, 12, 7, $cowcow->cow);

// echo "-------------------", PHP_EOL;
// $cowcow->getListEgg(7, 0, 1, $cowcow->chicken);

?>
