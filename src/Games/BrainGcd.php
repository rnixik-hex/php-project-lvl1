<?php

namespace Brain\Games\Games\BrainGcd;

use function Brain\Games\Engine\playGame;

const MIN_RANDOM_NUMBER = 2;
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
    $minimalNumber = min($number1, $number2);

    for ($potentialDivisor = $minimalNumber; $potentialDivisor > 0; $potentialDivisor -= 1) {
        if ($number1 % $potentialDivisor === 0 && $number2 % $potentialDivisor === 0) {
            return $potentialDivisor;
        }
    }

    return 1;
}

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}
