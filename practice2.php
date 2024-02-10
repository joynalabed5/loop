// print the number which is divisible by 7 upto 100;

<?php

for($i=1; $i<=100; $i++){
    if($i%7==0)
    echo $i. "\n";
 
}
?>


// print the number which is divisible by 7 upto 100;

<?php

for($i=1; $i<=100; $i+=7){

    echo $i. "\n";
 
}
?>

// Using ternary operator print the number which is divisible by 7 upto 100;
<?php 

 for ( $i=1; $i<=100; $i++){
    echo $i % 7 == 0 ? $i . "\n" : " " ;

 }


?>




//print the number which is divisible by 7 or  11

<?php 

for ($i=1; $i<=100; $i++){
    if($i % 7 == 0 || $i % 11 ==0)
    echo $i. "\n" ;
}
?>


//print the number which is divisible by 7 and  11

<?php 

for ($i=1; $i<=100; $i++){
    if($i % 7 == 0 && $i % 11 ==0)
    echo $i. "\n" ;
}