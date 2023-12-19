<?php

// $a=10;
// $b=20;
// $c= $a+$b;

// echo "$a and $b = $c"."";

// define("WEBSITE_NAME","www.wiztoonz.com");
// echo "My website name is ".WEBSITE_NAME;

// Example1
// Local variable
// $result=1;
// function myFun()
// {
// global $result;
// $result = 10+ 20;
// echo "Ans: ".$result;
// }
// echo $result;
// myFun();

//Example 2
// $global_var ="I love wiztoonz academy";
// function display_global()
// {
//     global $global_var;
//     echo $global_var;
// }
// echo $global_var;
// display_global();


// class wiz{
//     static $a=10;
//     public static $b=20;
// }

// echo wiz::$a + wiz::$b;


// $pi = 3.142;
// $success=true;
// $failure=false;
// $rank=1;

// if ($success)
// {
//     echo "Successful";
// }
// else if($failure){
//     echo "Failed";
// }

// $username='Vijay';
// $logged=true;
// $a=10;
// $b="Wiztoonz";
// $c=$a+$b;
// if($logged)
// {
//     print($c);
//     print("Hey,<b> $username </b> welcome to my website");
// }


// function callme(&$input)
// {
//     $input=10;
// }
// $outVar=5;
// echo $outVar;
// echo "</br>";
// callme($outVar);
// echo $outVar;


// $list = array(1,2,3,4,5);
// $marks = array("student1"=>array(95,60,85),"student2"=>80, "student3"=>75);

// echo "Student 1 taken Maths:".$marks['student1'][0].", Science:".$marks['student1'][1];

// foreach( $list as $single_value)
// {
//     $square=$single_value*$single_value;

//     echo "$square <br/>";
    

// }

// $t=date("H");

// if(!($t<"20"))
// {
//     echo "Have a good day";
// }
// else
// {
//     echo "Greetings of the day";
// }

switch(1)
{
    case 1:
        echo "one number detected";
        break;

    case 2:
        echo "Second Number Detected";
        break;

    default:
    echo "Invalid input";
    break;
    
}

?>