<?php

namespace Brain\Games\Games\BrainPrime;

use function Brain\Games\Engine\playGame;

const POSITIVE_ANSWER = 'yes';
const NEGATIVE_ANSWER = 'no';
const MIN_RANDOM_NUMBER = 7;
const MAX_RANDOM_NUMBER = 100;

function play(): void
{
    $description = 'Answer "' . POSITIVE_ANSWER . '" if given number is prime. Otherwise answer "no".';
    playGame($description, fn() => getRiddle());
}

function getRiddle(): array
{
    $number = (string) getRandomNumber();
    $isPrime = isPrime($number);
    $correctAnswer = $isPrime ? POSITIVE_ANSWER : NEGATIVE_ANSWER;

    return [(string) $number, $correctAnswer];
}

function isPrime(int $number): bool
{
    return gmp_prob_prime($number) === 2;
}

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}
