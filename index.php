<?php
    // echo 'Hello world';
    $string = $_GET['string'];
    if($string == strrev($string)){
        $isPalindrome=true;
    }else{
        $isPalindrome=false;
    }
    $results =[
        'isPalindrome' => $isPalindrome
    ];
    echo json_encode($results);
?>