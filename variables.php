<?php
$word1 = 'Hello';
$word2 = 'World';
echo 'I just want to say '.$word1.' '.$word2;

$cars = array('Honda', 'Toyota', 'Ford');
echo 'I drive a '.$cars[0];

foreach($cars as $car) {
    echo $car.'<br/>';
}

$car = array('make' => 'Toyota', 'model' => 'Camry', 'color' => 'Black');
echo $car['make'];

foreach($car as $key => $value){
    echo $key.': '.$value.'<br/>';
}
?>
