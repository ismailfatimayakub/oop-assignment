<?php
// Functional Programming

function square_numbers($numbers) {
    return array_map(function($x) {
        return $x ** 2;
    }, $numbers);
}

$numbers = [1, 2, 3, 4, 5];
$squared = square_numbers($numbers);
echo "Functional Programming - Squared Numbers: " . implode(", ", $squared) . "\n";


// Procedural Programming

function square_numbers_procedural($numbers) {
    $squared = [];
    foreach ($numbers as $num) {
        $squared[] = $num ** 2;
    }
    return $squared;
}

$numbers = [1, 2, 3, 4, 5];
$squared = square_numbers_procedural($numbers);
echo "Procedural Programming - Squared Numbers: " . implode(", ", $squared) . "\n";


// Object-Oriented Programming

class NumberProcessor {
    private $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function square_numbers() {
        $squared = [];
        foreach ($this->numbers as $num) {
            $squared[] = $num ** 2;
        }
        return $squared;
    }
}

$numbers = [1, 2, 3, 4, 5];
$processor = new NumberProcessor($numbers);
$squared = $processor-> square_numbers();
echo "object-oriented programming - squared numbers: ". implode (", ", $squared) . "/n";
