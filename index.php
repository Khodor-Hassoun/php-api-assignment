<?php
    // echo 'Hello world';
    $string = $_GET['string'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // API 1 RETURNS TRUE OR FALSE
    if($string == strrev($string)){
        $isPalindrome=true;
    }else{
        $isPalindrome=false;
    }
    //API 2 CALCULATES THE NUMBERS
    $abc = pow($a,3) + ($b*$c) - ($a/$b);



    $results =[
        'isPalindrome' => $isPalindrome,
        'abc' => $abc
    ];
    echo json_encode($results);
?>