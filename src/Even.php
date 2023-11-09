<?php

use function cli\line;
use function cli\prompt;

function even()
{
    line('Welcome to the Even Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no"');

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $answer = prompt("Question: {$number}");
        line("You answered: {$answer}");
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        if ($correctAnswer === $answer) {
            line("Correct!");
        } else {
            return line("'{$answer}' is the wrong answer. The correct answer was '{$correctAnswer}'. Let's try again, {$name}!");
            // return even(); // Recursive call to restart the game
        }
    }

    line("Congratulations, {$name}!");
}