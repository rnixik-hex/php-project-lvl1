<?php

namespace Brain\Games\Games\BrainProgression;

use function Brain\Games\Engine\playGame;

const START_NUMBER_MIN = 1;
const START_NUMBER_MAX = 100;
const LENGTH_MIN = 5;
const LENGTH_MAX = 15;
const STEP_SIZE_MIN = 3;
const STEP_SIZE_MAX = 10;

function play(): void
{
    $description = 'What number is missing in the progression?';
    playGame($description, fn() => getRiddle());
}

function getRiddle(): array
{
    $startNumber = rand(START_NUMBER_MIN, START_NUMBER_MAX);
    $stepSize = rand(STEP_SIZE_MIN, STEP_SIZE_MAX);
    $length = rand(LENGTH_MIN, LENGTH_MAX);

    $progression = buildProgression($startNumber, $stepSize, $length);
    $missingIndex = array_rand($progression);
    $progressionWithMissingNumber = $progression;
    $progressionWithMissingNumber[$missingIndex] = '..';

    $question = implode(' ', $progressionWithMissingNumber);

    return [$question, (string) $progression[$missingIndex]];
}

function buildProgression(int $startNumber, int $stepSize, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i += 1) {
        $progression[] = $startNumber + $i * $stepSize;
    }

    return $progression;
}
