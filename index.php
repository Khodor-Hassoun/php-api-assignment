<?php
    // echo 'Hello world';
    $string = $_GET['string'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $password = $_POST['password'];

    // API 1 RETURNS TRUE OR FALSE
    if($string == strrev($string)){
        $isPalindrome=true;
    }else{
        $isPalindrome=false;
    }
    //API 2 CALCULATES THE NUMBERS
    $abc = pow($a,3) + ($b*$c) - ($a/$b);

    //API 3 STRONG PASSWORD
    if(strlen($password) >12){
        $isStrong = true;
    }
    else{
        $isStrong = false;
    }


    $results =[
        'isPalindrome' => $isPalindrome,
        'abc' => $abc,
        'isStrong' => $isStrong
    ];
    echo json_encode($results);
?>