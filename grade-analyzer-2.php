<?php
// declaring of variables and its value
// grading variable process and subjects for dividing for average later on (remember, executing of a program starts from top to bottom
$grade = 0;
$total = 0;
$subjects = 7;

// student readline
$student = readline("Enter name of student: ");
$gradeInput = readline("Enter grades: ");
$grades = explode("," , $gradeInput);

foreach ($grades as $grade) {
    $grade = (int) trim($grade);
    $total += $grade;
}

$avgGrade = $total / $subjects;

// if and else if statement on determining the passing or failing average grade
if ($avgGrade >= 75) {
    echo "$student have a passing average of: " . $avgGrade, "\n" ;
} else {
    echo "$student have a failing average of: " . $avgGrade, "\n" ;
}

