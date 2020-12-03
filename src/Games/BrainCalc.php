<?php

namespace Brain\Games\Games\BrainCalc;

use function Brain\Games\Engine\playGame;

const MIN_RANDOM_NUMBER = 10;
const MAX_RANDOM_NUMBER = 30;

const OPERATION_SUM = '+';
const OPERATION_DIFFERENCE = '-';
const OPERATION_MULTIPLICATION = '*';

function play(): void
{
    $description = 'What is the result of the expression?';
    playGame($description, fn() => getRiddle());
}

function getRiddle(): array
{
    $number1 = getRandomNumber();
    $number2 = getRandomNumber();
    $operation = getRandomOperation();

    $question = "$number1 $operation $number2";

    $correctAnswer = '';
    switch ($operation) {
        case OPERATION_SUM:
            $correctAnswer = (string) ($number1 + $number2);
            break;
        case OPERATION_DIFFERENCE:
            $correctAnswer = (string) ($number1 - $number2);
            break;
        case OPERATION_MULTIPLICATION:
            $correctAnswer = (string) ($number1 * $number2);
    }

    return [$question, $correctAnswer];
}

function getRandomNumber(): int
{
    return rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
}

function getRandomOperation(): string
{
    $operations = [
        OPERATION_SUM,
        OPERATION_DIFFERENCE,
        OPERATION_MULTIPLICATION,
    ];

    $randIndex = array_rand($operations);

    return $operations[$randIndex];
}
