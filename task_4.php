<?php

$stu1 = array (
    array("Math",70),
    array("English",90),
    array("Science",86),
  );
  $stu2 = array (
    array("Math",60),
    array("English",65),
    array("Science",97),
  );
  $stu3 = array (
    array("Math",75),
    array("English",80),
    array("Science",85),
  );

  function stuGrade($stu1, $stu2, $stu3) {
    echo "Average grade of 1st student is:".($stu1[0][1]+$stu1[1][1]+$stu1[2][1])/3;
    echo "\nAverage grade of 2nd student is:".($stu2[0][1]+$stu2[1][1]+$stu2[2][1])/3;
    echo "\nAverage grade of 3rd student is:".($stu3[0][1]+$stu3[1][1]+$stu3[2][1])/3;
  }

stuGrade($stu1, $stu2, $stu3);
  

  

?>