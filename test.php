<?php

require '_config/config.php';
require 'vendor/autoload.php';
require 'vendor/fzaninotto/Faker/src/autoload.php';
require '_functions/functions.php';

/*$faker= \Faker\Factory::create();
$query=new \steph\db_query\db_query();
for($i=0;$i<70;$i++){
    $link=$faker->numerify('img-#.jpg');
    $sql="UPDATE `articles` SET link='$link' WHERE id=$i+1";
    $result=$query->setSql($sql)->run();
}
debug($result->getResult());*/

//echo $faker->numerify('img-#.jpg');