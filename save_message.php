<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = trim($_POST["message"]);

    if (!empty($message)) {
        if (file_put_contents("messages.txt", $message . "\n", FILE_APPEND)) {
            header("Location: Dafa.html?status=success");
            exit;
        }
    }
}
header("Location: Dafa.html?status=error");
exit;
?>
