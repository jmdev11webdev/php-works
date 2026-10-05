<?php
// quiz contains questions with => to represent the answer of the question.
$quiz = [
    'What is the largest planet in the solar system?: ' => 'Jupiter',
    'What is the molecular formula of water?: ' => 'H20',
    'What is the largest water body on earth?: ' => 'Pacific',
];

// score
$score = 0;

// foreach loop
foreach ($quiz as $question => $correct_ans) {
    // readline (whatever you type here is what you also get to match the correct answer
    $u_ans = readline($question);

    // if else statement (logic) for the loop on distinguishing/deciding if correct or wrong
    if ($u_ans === $correct_ans) {
        $score++;
        echo "Correct, your score now is: " . $score," \n";
    } else {
        echo "Wrong! Your score is still $score \n\n";
    }
}

// final output after the loop is finished
echo "Final score throughout the quiz is: $score/", count($quiz) . "\n";