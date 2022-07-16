<?php
    set_include_path(get_include_path().PATH_SEPARATOR.'controller');
    spl_autoload_extensions('_class.php');
    spl_autoload_register();

    $farm = new FarmController();
    $farmCow = new CowController();
    $farmChicken = new ChickenController();

    echo "На ферме находится ".$farmCow->cow." коров и ".$farmChicken->chicken." куриц", PHP_EOL;

    $farm->getListAnimal($farmCow->cow, 'Корова');

    echo PHP_EOL,"-------------------", PHP_EOL;
    $farm->getListAnimal($farmChicken->chicken, 'Курица');


    echo PHP_EOL,"-------------------", PHP_EOL;
    $farmCow->getListMilk(8, 12, 7, $farmCow->cow);

    echo "-------------------", PHP_EOL;
    $farmChicken->getListEgg(7, 0, 1, $farmChicken->chicken);

    echo "-------------------", PHP_EOL;
    $farmCow->newAnimal('корова', 1);
    echo PHP_EOL;
    $farmChicken->newAnimal('курица', 5);

    echo PHP_EOL;
    echo "На ферме находится ".$farmCow->cow." коров и ".$farmChicken->chicken." куриц", PHP_EOL;


    echo "-------------------", PHP_EOL;
    $farmCow->getListMilk(8, 12, 7, $farmCow->cow);

    echo "-------------------", PHP_EOL;
    $farmChicken->getListEgg(7, 0, 1, $farmChicken->chicken);
    
?>