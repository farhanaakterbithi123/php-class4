<?php


function garivaracount($tk){
    static $garivara = 240;
    $garivara += $tk;
    echo $garivara. '</br>';
}

garivaracount(250);
garivaracount(300);
garivaracount(250);
garivaracount(400);
garivaracount(500);


$bick = [
    'fzs',
    'black',
    'gorgeous',
    'v2,v3'
];

echo "<pre>";
var_dump($bick);
echo "<pre>";

$bick = [
    'fzs',
    'black',
    'gorgeous',
    'v2,v3'
];

echo "<pre>";
print_r($bick);
echo "<pre>";



$student = [
  'name' => 'farhana',
  'college' => ' bangladesh sweden polytechnic institute',
  'department' => 'computer',
  'roll' => '175116',
  'registration number' => '1234567890'
];


echo "<pre>";
print_r($student);
echo "<pre>";


$student = [
    'name' => 'farhana',
    'college' => ' bangladesh sweden polytechnic institute',
    'department' => 'computer',
    'roll' => '175116',
    'registration number' => '1234567890'
  ];
  
  
  echo "<pre>";
  print_r($student['college']);
  echo "<pre>";



  $name = ' bangladesh sweden polytechnic institute';
  printf("welcome to our college %s", ucwords($name));

echo ('</br>');


$preface = 'our campus is so beautiful its locks amazing and we missed our campus very badly';

echo substr($preface,12);

echo ('</br>');
$preface = 'our campus is so beautiful its locks amazing and we missed our campus very badly';

echo substr($preface,0, 26) . '......';


echo ('</br>');

$wrongwords = [
    'bad',
    'fack',
    'useless',
];

$rightwords = [
    'good',
    'nice',
    'amazing',
];



$react = 'you are a bad person. you are fack human.';

echo str_replace($wrongwords, $rightwords, $react);



echo ('</br>');

$wrongwords = [
    'bad',
    'fack',
    'useless',
];

$rightwords = [
    'good',
    'nice',
    'amazing',
];



$react = 'you are a Bad person. you are Fack human.';

echo str_ireplace($wrongwords, $rightwords, $react);


echo ('</br>');
$password = 'farhana';
//    //*50
//    //*40


$hash = password_hash($password, PASSWORD_BCRYPT);
echo password_hash($password, PASSWORD_BCRYPT);


var_dump(password_verify('farhana', $hash));

echo ('</br>');
$password = 'farhana';
//    //*50
//    //*40


$hash = password_hash($password, PASSWORD_BCRYPT);
echo password_hash($password, PASSWORD_BCRYPT);


var_dump(password_verify('farhana123', $hash));