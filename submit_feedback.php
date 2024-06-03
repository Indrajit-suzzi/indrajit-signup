<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Normally, here you would store the feedback in a database.
    // For demonstration purposes, we'll just display the feedback.

    echo "<h1>Thank you for your feedback, $name!</h1>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Feedback:</strong> $feedback</p>";
}
?>
