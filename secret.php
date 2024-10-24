<?php
    $file = $_GET['file'] ?? null;
    if ($file) {

        echo nl2br(file_get_contents($file));
    } else {
        echo "The secrets lie within... use the right path.";
    }
?>
