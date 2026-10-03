<?php

// declard variables with values
// scoring variables
$score = 0; // you'll start at 0
$correct = 1; 
$wrong = 1;
$items = 3;

// associative arrayed object correct answers
$ans1 = ["Jupiter", "jupiter"];
$ans2 = ["H20", "h20"];
$ans3 = ["Pacific", "pacific"];

// question
$q1 = readline("What is the largest planet in the solar system?: "); 

// if and else if statements for the questions and answers
if ($q1 === $ans1[(0)] || $q1 === $ans1[(1)]) {
    echo "Correct! the answer is $q1! \n";
    echo "Your score is now: " . $score += $correct, "\n";
} else if ($q1 != $ans1) {
    echo "Wrong! the correct answer is " . $ans1[(0)] . " or " . $ans1[(1)] . "! \n";
    echo "Your score is now: " . $score += $correct, "\n";
} 

// question
$q2 = readline("What is the molecular formula of water?: ");

if ($q2 === $ans2[(0)] || $q2 === $ans2[(1)]) {
    echo "Correct! the answer is $q2! \n";
    echo "Your score is now: " . $score += $correct, "\n";
} else if ($q2 != $ans2) {
    echo "Wrong! the correct answer is " . $ans2[(0)] . " or " . $ans2[(1)] . "! \n";
    echo "Your score is now: " . $score, "\n";
}

// question
$q3 = readline("What is the largest ocean in the world?: ");

if ($q3 === $ans3[(0)] || $q3 === $ans3[(1)]) {
    echo "Correct! the answer is $q3! \n";
    echo "Your score is now: " . $correct += $score, " congratulations! perfect score! \n";
} else if ($q3 != $ans3) {
    echo "Wrong! the correct answer is " . $ans3[(0)] . " or " . $ans3[(1)] . "! \n";
} else {
    echo "You only got $score over $items";
}