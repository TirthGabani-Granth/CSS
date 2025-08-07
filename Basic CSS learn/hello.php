<?php

$x = 1;
if ($x--) {       // Post-decrement
    echo $x--;    // Post-decrement
} else {
    echo $x++;    // Post-increment
}

?>