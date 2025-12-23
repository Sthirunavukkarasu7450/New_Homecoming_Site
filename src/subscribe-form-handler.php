<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['Subscribe_First_Name'] ?? '';
    $last = $_POST['Subscribe_Last_Name'] ?? '';
    $email = $_POST['Subscribe_Email'] ?? '';

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save to database, send email, etc.
        echo "Thank you for subscribing, $first!";
    } else {
        echo "Invalid email address.";
    }
}
?>