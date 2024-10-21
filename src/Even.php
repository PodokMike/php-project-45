<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function evenGame(string $name = "user")
{
    $answer = "";
    $winCount = 0;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    while ($winCount !== 3) {
        $randNum = rand();
        line("Question: {$randNum}");
        $answer = prompt('Your answer: ');
        if ($randNum % 2 === 0 && $answer === "yes") {
            line("Correct!");
            $winCount++;
        } elseif ($randNum % 2 !== 0 && $answer === "no") {
            line("Correct!");
            $winCount++;
        } elseif ($randNum % 2 === 0 && $answer !== "yes") {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, {$name}!");
        } elseif ($randNum % 2 !== 0 && $answer !== "no") {
            line("'yes' is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}