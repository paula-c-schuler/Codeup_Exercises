<?php

echo "hello world \n";

 $a = 1;
 $b = 3;
 $c = '4';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
 } else if ($b > $a) {
     // output the appropriate result
     echo "$b is greater than $a\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 } else if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 } else if ($b === $c) {
     // output the appropriate result
     echo "$b is not equal to $c\n";
 } else if ($b != $c) {
     // output the appropriate result
     echo "$b is not equal to $c\n";
 } else if ($b !== $c) {
     // output the appropriate result
     echo "$b is not identical to $c\n";
 }




?>