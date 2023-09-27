<?php

$studentGrades = [
    ['Math' => 95, 'English' => 98, 'Science' => 92],
    ['Math' => 90, 'English' => 48, 'Science' => 75],
    ['Math' => 80, 'English' => 92, 'Science' => 68]
];
function calculateGrades($gradesArray) {
    foreach ($gradesArray as $index => $student) {
        $mathGrade = $student['Math'];
        $englishGrade = $student['English'];
        $scienceGrade = $student['Science'];
        
        $averageGrade = ($mathGrade + $englishGrade + $scienceGrade) / 3;
        
        if($averageGrade>=90){
            echo "Average grade of 1st student is: A+\n";
        }
        else if($averageGrade>=80){
            echo "Average grade of 2nd student is: A\n";
        }
        else if($averageGrade>=70){
            echo "Average grade of 3rd student is: A-\n";
        }
        else{
            echo "";
        }
    }

}
calculateGrades($studentGrades);

?>
