<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize an array to store error messages
    $errors = array();

    // Validate and sanitize name
    $name = $_POST['name'];
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors['name'] = "Name should only contain letters and spaces.";
    }

    // Validate email
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Sanitize and validate message
    $message = $_POST['message'];

    // Check if there are any errors
    if (count($errors) === 0) {
        // Process the form data, send email, or store in the database
        // ...
        // Redirect to a thank you page or display success message
        // header("Location: thank_you.php");
        // exit();
    }
}
?>
