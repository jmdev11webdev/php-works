<?php

$questions = [
    'What is the largest planet in the solar system?: ' => 'Jupiter',
    'What is the molecular formula of water?: ' => 'H20',
    'What is the largest water body on earth?: ' => 'Pacific',
];

$score = 0;

foreach ($questions as $question => $correct_ans) {
    $u_ans = readline($question);

    if ($u_ans === $correct_ans) {
        $score++;
        echo "Correct, your score now is: " . $score," \n";
    } else {
        echo "Wrong! Your score is still $score \n\n";
    }
}

echo "Final score throughout the quiz is: $score/", count($questions) . "\n";