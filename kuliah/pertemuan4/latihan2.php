<?php
//Nested Loop / Looping Bersarang / Looping di dalam Looping
for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo "<br>";
}
