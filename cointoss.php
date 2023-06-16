<?php
$call = readline("It's either heads or tails. Call it, friendo.\n");
$num = rand(2, 9);
if ($num % 2 == 0) {
    $coin = "heads";
}else {
    $coin = "tails";
}
echo "\ncoin: " . $coin . "\n";
switch ($call) {
    case $call == $coin:
        echo "\nWell done!\n";
        break;
    case $call != $coin:
        echo "\nYou lost.\n";
        break;
}
?>