<?php
    $a = "Kevin";
    $b = "Mary";
    $c = "Joe";
    $d = "Larry";
    $e = "Audrey";

    $students = array('a', 'c', 'e');

    foreach ($students as $seats) {
      echo $$seats."<br>";
      # code...
    }
 ?>
