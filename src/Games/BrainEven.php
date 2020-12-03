<?php

namespace Brain\Games\Games\BrainEven;

use function Brain\Games\Engine\playGame;

const POSITIVE_ANSWER = 'yes';
const NEGATIVE_ANSWER = 'no';
const MIN_RANDOM_NUMBER = 10;
const MAX_RANDOM_NUMBER = 100;

function play(): void
{
    $description = 'Answer "' . POSITIVE_ANSWER . '" if the number is even, otherwise answer "no".';
    playGame($description, fn() => getRiddle());
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

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}
