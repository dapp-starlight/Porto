<?php
if (file_exists("messages.txt")) {
    $messages = file("messages.txt", FILE_IGNORE_NEW_LINES);
    foreach ($messages as $msg) {
        echo "<p>" . htmlspecialchars($msg) . "</p>";
    }
} else {
    echo "<p>Belum ada pesan.</p>";
}
?>
