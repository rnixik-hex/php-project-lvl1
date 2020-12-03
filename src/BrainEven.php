<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

const POSITIVE_ANSWER = 'yes';
const NEGATIVE_ANSWER = 'no';
const MIN_RANDOM_NUMBER = 10;
const MAX_RANDOM_NUMBER = 100;
const GAME_ROUNDS_NUM = 3;

function play(): void
{
    $playerName = greet();

    line('Answer "' . POSITIVE_ANSWER . '" if the number is even, otherwise answer "no".');
    for ($round = 0; $round < GAME_ROUNDS_NUM; $round += 1) {
        [$number, $correctAnswer] = getRiddle();
        line('Question: %d', $number);
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

function getRiddle(): array
{
    $number = getRandomNumber();
    $isEven = isEven($number);
    $correctAnswer = $isEven ? POSITIVE_ANSWER : NEGATIVE_ANSWER;

    return [$number, $correctAnswer];
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
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

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}
