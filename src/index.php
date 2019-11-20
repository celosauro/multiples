<?php

declare(strict_types=1);

require_once "../vendor/autoload.php";

$number = 100;
for ($i = 1; $i <= $number; $i++) {
    $multiple = Multiples\Factory::create($i);
    echo $i . ' => ' . $multiple->output() . PHP_EOL;
}
