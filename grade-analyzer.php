<?php
// declaring of variables and its value
// grading variable process and subjects for dividing for average later on (remember, executing of a program starts from top to bottom
$grade = 0;
$subjects = 7;

// student readline
$student = readline("Enter the name of student: ");

// for and foreach loop with if else statement
for ($i = 0; $i < 7; $i++) {
    // readline for entering grades
    $grades = (int) readline("Enter grade: ");
    $grade += $grades;
}

// total and average
$sumGrade = $grade;
$avgGrade = $sumGrade / $subjects;

// if and else if statement on determining the passing or failing average grade
if ($avgGrade >= 75) {
    echo "$student have a passing average of: " . $avgGrade, "\n" ;
} else {
    echo "$student have a failing average of: " . $avgGrade, "\n" ;
}