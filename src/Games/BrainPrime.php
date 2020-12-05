<?php

namespace Brain\Games\Games\BrainPrime;

use function Brain\Games\Engine\playGame;

const POSITIVE_ANSWER = 'yes';
const NEGATIVE_ANSWER = 'no';
const MIN_RANDOM_NUMBER = 7;
const MAX_RANDOM_NUMBER = 100;

function play(): void
{
    $description = 'Answer "' . POSITIVE_ANSWER . '" if given number is prime. '
        . 'Otherwise answer "' . NEGATIVE_ANSWER . '".';
    playGame($description, fn() => getRiddle());
}

function getRiddle(): array
{
    $number = getRandomNumber();
    $isPrime = isPrime($number);
    $correctAnswer = $isPrime ? POSITIVE_ANSWER : NEGATIVE_ANSWER;

    return [(string) $number, $correctAnswer];
}

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }

    // Find any divisor. If it is found, number is not prime by definition
    for ($i = 2; $i <= $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}
