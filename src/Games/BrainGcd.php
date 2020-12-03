<?php

namespace Brain\Games\Games\BrainGcd;

use function Brain\Games\Engine\playGame;

const MIN_RANDOM_NUMBER = 1;
const MAX_RANDOM_NUMBER = 100;

function play(): void
{
    $description = 'Find the greatest common divisor of given numbers.';
    playGame($description, fn() => getRiddle());
}

function getRiddle(): array
{
    $number1 = getRandomNumber();
    $number2 = getRandomNumber();
    $greatestCommonDivisor = getGreatestCommonDivisor($number1, $number2);

    $question = "$number1 $number2";

    return [$question, (string) $greatestCommonDivisor];
}

function getGreatestCommonDivisor(int $number1, int $number2): int
{
    return (int) gmp_gcd($number1, $number2);
}

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}
