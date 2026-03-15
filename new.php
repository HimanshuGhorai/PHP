<?php
// echo "hello ";


// $4name = "himanshu"


// $fname = "himu";

// $lname = " dev";


// echo $fname.$lname;


// $a = 2;

// $b = 4;

// $c = $a + $b ;

// echo "result : " . $c ;

// echo var_dump($a < $b) ;
// echo var_dump($a == $b) ;
// echo var_dump($a <= $b) ;
// echo var_dump($a >= $b) ;
// echo var_dump($a != $b) ;



// $age = 24;

// if($age > 18){
//     echo "you can vote"
// }else{
//     echo "you can't vote "
// }


// $arry = ["car1","car2","car3","car4"];

// print_r($arry);


// $arry = ["car1","car2","car3","car4"];
// $arry[]= "car5";

// print_r($arry)


// function 

function sum($a,$b){
   $c =  $a + $b;
   return $c;
}


echo sum(2,4);


$arr = array(
    0 => "car1",
    1 => "car2",
    2 => "car3",
    3 => "car4",
    4 => "car5",
    5 => "car6",
    6 => "car7",



);

echo "<pre>";
// $result = array_slice($arr,3);  // this is  how array_slice() works;


$result = array_search('car2',$arr); // to search element 



print_r($result);

echo "<pre>";










?>