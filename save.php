<?php

if(isset($_POST['number'])) {

    $number = $_POST['number'];

    // File name
    $file = "numbers.txt";

    // Add number with date
    $data = $number . " - " . date("Y-m-d H:i:s") . "\n";

    // Save to file
    file_put_contents($file, $data, FILE_APPEND);

    echo "<h2>Number Saved Successfully ❤️</h2>";
}

?>
