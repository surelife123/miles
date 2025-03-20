<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $opinion = htmlspecialchars($_POST["opinion"]);
    $to = "milescollins862@gmail.com";
    $subject = "New Opinion About Your Life";
    $message = "Name: $name\n\nOpinion:\n$opinion";
    $headers = "From: noreply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your opinion has been sent!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send. Try again.'); window.history.back();</script>";
    }
} else {
    header("Location: index.html");
}
?>
