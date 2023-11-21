<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $remarks = $_POST["remarks"];

    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nCountry: $country\nRemarks: $remarks";
    $to = "almatkabirovl@gmail.com";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thank_you.html");
        exit;
    } else {
        echo "Error sending email.";
    }
}
?>
