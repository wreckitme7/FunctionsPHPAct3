<?php
function calculate( $a, $b, $command): mixed {
        switch($command) {
            case 'sum':
                return $a + $b;
            case 'minus':
                return $a - $b;
            case 'multiply':
                return $a * $b;
            case 'division':
                return $a / $b;
            default:
                return "invalid operation";
        }
    }

echo calculate(a: 10, b: 5, command: 'sum');
echo calculate(a: 20, b: 10, command: 'minus');
echo calculate(a: 5, b: 2, command: 'multiply');
echo calculate(a: 7, b: 2, command: 'division');
?>