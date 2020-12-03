<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const GAME_ROUNDS_NUM = 3;

function playGame(string $gameRulesDescription, callable $getRiddle): void
{
    $playerName = greet();

    line($gameRulesDescription);
    for ($round = 0; $round < GAME_ROUNDS_NUM; $round += 1) {
        [$question, $correctAnswer] = $getRiddle();
        line('Question: %s', $question);
        $answer = prompt('Your answer');
        if ($answer !== $correctAnswer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $playerName);

            return;
        }
        line('Correct!');
    }

    line("Congratulations, %s!", $playerName);
}

function greet(): string
{
    line('Welcome to the Brain Game!');
    $defaultValue = '';
    $questionMarker = ' ';
    $name = prompt('May I have your name?', $defaultValue, $questionMarker);
    line("Hello, %s!", $name);

    return $name;
}
