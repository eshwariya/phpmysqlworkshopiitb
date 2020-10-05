<?php
$a = array(
            array(1, 2),
            array(4, 5)

          );

$b = array(
            array(1, 1),
            array(2, 1)

           );

print("Matrix one is: <br>");

          for($i = 0; $i < 2; $i++){
              for($j = 0; $j < 2; $j++){
                 print($a[$i][$j] . " ");}
               print("<br>");  }
 print("Matrix two is: <br>");

                 for($i = 0; $i < 2; $i++){
                     for($j = 0; $j < 2; $j++){
                        print($b[$i][$j] . " ");}
                      print("<br>");  }


$sum = array_fill(0, 2, array_fill(0, 2, 0));

for($i = 0; $i < 2; $i++){
    for($j = 0; $j < 2; $j++){
        $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
}

print("Addition of two matrices: <br>");

for($i = 0; $i < 2; $i++){
    for($j = 0; $j < 2; $j++){
       print($sum[$i][$j] . " ");}
       print("<br>");
     }
?>