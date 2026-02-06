<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $answer = $_POST['answer'] ?? '';
    $message = $_POST['message'] ?? '';

    $data = "------\n";
    $data .= "Date: " . date("d-m-Y H:i:s") . "\n";
    $data .= "Answer: " . $answer . "\n";
    $data .= "Message: " . $message . "\n";

    file_put_contents("messages.txt", $data, FILE_APPEND);

    echo "<h2 style='text-align:center;color:pink;'>Thank you your friend ❤️<br>Your message is saved 💕</h2>";
}
?>
