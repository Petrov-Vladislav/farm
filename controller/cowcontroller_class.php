<?php

class CowController extends FarmController {

    public function getListMilk($minMilk, $maxMilk, $day, $cow) {
        $countLitrDay = 0;
        $countLitrSum = 0;
        for ($i = 1; $i<=$day; $i++) {
            for ($n = 1; $n<=$cow; $n++) {
                $countLitr = mt_rand($minMilk, $maxMilk) + mt_rand($minMilk, $maxMilk);
                $countLitrDay = $countLitrDay + $countLitr;
            }
            
            $countLitrSum = $countLitrDay;
        }
        echo "Корова в день дает молоко два раза. За неделю ".$this->cow." коров дали ".$countLitrSum." л. молока", PHP_EOL;
    }

}

?>