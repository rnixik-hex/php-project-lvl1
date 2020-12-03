# Brain games
[![Actions Status](https://github.com/rnixik-hex/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/rnixik-hex/php-project-lvl1/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/caf4f4f52d2a2bdecd74/maintainability)](https://codeclimate.com/github/rnixik-hex/php-project-lvl1/maintainability)
[![Linter](https://github.com/rnixik-hex/php-project-lvl1/workflows/Linter/badge.svg)](https://github.com/rnixik-hex/php-project-lvl1/actions)

Educational project with mini games:
* `game-even` - decide whether random number is even or not
* `game-calc` - provide correct answer for mathematical operation on two numbers
* `brain-gcd` - find the greatest common divisor for two numbers
* `brain-progression` - find missing number in progression
* `brain-prime` - decide whether random number is prime or not

## How to run

Run `make [game-name]`
See previews with asciicast for details.

## Previews

### brain-even
[![asciicast](https://asciinema.org/a/376914.svg)](https://asciinema.org/a/376914)

### brain-calc
[![asciicast](https://asciinema.org/a/376945.svg)](https://asciinema.org/a/376945)

### brain-gcd
[![asciicast](https://asciinema.org/a/376951.svg)](https://asciinema.org/a/376951)

### brain-progression
[![asciicast](https://asciinema.org/a/376955.svg)](https://asciinema.org/a/376955)

### brain-prime
[![asciicast](https://asciinema.org/a/376957.svg)](https://asciinema.org/a/376957)

## Commands to work in Docker

### Install dependencies
`make docker-prepare`

### Run interactive shell
`make docker-run`
