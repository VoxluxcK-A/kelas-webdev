<?php
echo "<pre>";

$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    
    for ($j = 1; $j <= ($rows - $i); $j++) {
        echo "&nbsp;";
    }
    
    // Second inner loop prints the stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    
    // Move to the next line after completing a row
    echo "<br>";
}

for ($i = $rows; $i >= 1; $i--) {
    
    for ($j = 1; $j <= ($rows - $i); $j++) {
        echo "&nbsp;";
    }
    
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    
    echo "<br>";
}
?>


