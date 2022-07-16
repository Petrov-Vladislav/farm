<?php

class ChickenController extends FarmController {
    
    public function getListEgg($day, $minEgg, $maxEgg, $chicken) {
        $countEggDay = 0;
        $countEggSum = 0;
        for ($i = 1; $i<=$day; $i++) {
            for ($n = 1; $n<=$chicken; $n++) {
                $countEgg = mt_rand($minEgg, $maxEgg);
                $countEggDay = $countEggDay + $countEgg;
            }
            
            $countEggSum = $countEggDay;
        }
        echo "За неделю ".$this->chicken." кур дали ".$countEggSum." шт. яиц", PHP_EOL;
    }

}

?>