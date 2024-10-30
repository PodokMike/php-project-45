<?php

namespace BrainGames\Calc;

require_once "src/Engine.php";

use function cli\line;
use function cli\prompt;

//addCount();
//addCount();

function calc(string $name = 'User')
{   
    function randDigits()
    {
        $a = rand(1, 10);
        $b = rand(1, 10);
        
        return [$a, $b];
    }

    function wrongAnswer($answer, $correct, $name)
    {
        line("Your answer: {$answer}");
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
        line("Let's try again, {$name}!");
    }
    line('What is the result of the expression?');
    while (getCount() !== 3) {
        $vars = randDigits();
        $result = $vars[0] + $vars[1];
        line("Question: {$vars[0]} + {$vars[1]}");
        $answer = prompt('Your answer');
        if ($answer == $result) {
            line('Correct!');
            addCount();
        } else {
            wrongAnswer($answer, $result, $name);
            die;
        }
        $vars = randDigits();
        $result = $vars[0] - $vars[1];
        line("Question: {$vars[0]} - {$vars[1]}");
        $answer = prompt('Your answer');
        if ($answer == $result) {
            line('Correct!');
            addCount();
        } else {
            wrongAnswer($answer, $result, $name);
            die;
        }
        $vars = randDigits();
        $result = $vars[0] * $vars[1];
        line("Question: {$vars[0]} * {$vars[1]}");
        $answer = prompt('Your answer');
        if ($answer == $result) {
            line('Correct!');
            addCount();
        } else {
            wrongAnswer($answer, $result, $name);
            die;
        }
    }
    line("Congratulations, {$name}!");
    
}