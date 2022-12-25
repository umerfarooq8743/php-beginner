<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP </title>
</head>
<body>
     <?php
         define("PI",3333);
    
    // $a=5;
    // $b=6;
    // echo $a+$b;
    // echo"\n";
    // echo"hello world\n";

    // $num="thi is website new";
    // echo $num;

    
    
    // $a=5;
    // $b=6;
    // echo $a+$b;
    // echo"<br>";
    // echo"hello world <br>";

    // $num="thi is website new <br>";
    // echo $num;
    // var_dump($a);
    //  var_dump($b);
    //   var_dump($num);


    // $vegetables=array('tomato','peas','potato','onion');
    // var_dump($vegetables)

    // $var1= null;


    // $obja="this is a codebook";
    // echo strlen($obja),"<br>";
    // echo str_word_count($obja),"<br>";
    // echo strrev($obja),"<br>";
    // echo strpos($obja,'code'),"<br>";   
    // echo str_replace('a','an',$obja);

    // echo PI;

    // echo "the value of 3+4 is =",3+4,"<br>";
    //  echo "the value of 3-4 is =",3-4,"<br>";
    //   echo "the value of 3/4 is =",3/4,"<br>";
    //    echo "the value of 3*4 is =",3*4,"<br>";
    //     echo "the value of 3%4 is =",3%4,"<br>";
    //      echo "the value of 3**4 is =",3**4,"<br>";
    //      $x=6;
    //      echo $x;
    //      $x=$x+1 ;
    //      echo $x,"<br>";
    //      $x++;
    //      echo $x


    // $t=date("H");
    // if($t<"13"){
    //     echo$t."this is a good time";
    // }
    // elseif($t=="10"){
    //     echo $t."is 10";
    // }
    // else{
    //     echo "is a bad time";
    // }
    // echo date_default_timezone_get();

    // $ab=34;
    // if($ab<"18"){
    //     echo "u are short";
    // }
    // else{
    //     echo"u are eligible";
    // }

        // $var2=1;
        // while($var2<=6){
        // echo "the value is".$var2."<br>";
        // $var2++;}

        // $var3=10;
        // while($var3<=22){
        //     if($var3==20)
        //     {
        //         $var3++;
        //         continue;
        //     }
        // echo "the value is".$var3."<br>";
        // $var3++;}

        //   $var3=10;
        // while($var3<=22){
        //     if($var3==20)
        //     {
        //         $var3++;
        //         break;
        //     }
        // echo "the value is".$var3."<br>";
        // $var3++;}


        // for($i=0;$i<=7;$i++){
        //     echo"this is the numbe".$i."<br>";
        // }

        // function avg($num1,$num2){
        //     $average=($num1+$num2)/2;
        //     return $average;
        // }

        // function rad_crl($radi){
        //     $radius=3.14*$radi*$radi;
        //     return $radius;
        // }
        // echo rad_crl(2),"<br>";
        // echo avg(55,78);

        $num=array(1,2,5,3,7,1,6,9);
        sort($num);
        $len=count($num);
        for($i=0;$i<$len;$i++)
        {
            echo $num[$i];
            echo "<br>";
        }

         $num=array(1,2,5,8,1,11,13,6,9);
        rsort($num);
        $len=count($num);
        for($i=0;$i<$len;$i++)
        {
            echo $num[$i];
            echo "<br>";
        }
    ?> 
</body>
</html>