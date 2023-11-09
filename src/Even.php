<?php

use function cli\line;
use function cli\prompt;



function even()
{
    line('Welcome to the Even Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no"');

    for($i = 0; $i < 3; ){
        $number = rand(1, 100);
    $answer = prompt("Question: {$number}");
    line("You answer: {$answer}");
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
    // return [$answer, $correctAnswer];
    if($correctAnswer === $answer) {
        line( "Correct!");
        $i++;
    } else {
        return line("'yes' is wrong answer ;(. Correct answer was 'no'.
        Lets try again, {$name}");

    };
    

}
line("Congratulations, {$name}!");

}

