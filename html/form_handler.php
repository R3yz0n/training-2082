<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    
    echo "<h2>Form Values Received:</h2>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Password:</strong> " . $password . "</p>";
} else {
    echo "<p>No form data submitted.</p>";
}
?>
