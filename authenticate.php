<?php
// Hardcoded credentials for each friend (in a real app, store these in a database)
$users = [
    'anurag' => '123',
    'sumit' => '456',
    'ayush' => '789',
    'geetanjli' => '000'
];

$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username exists and the password matches
if (array_key_exists($username, $users) && $users[$username] == $password) {
    // Start a session and redirect to the user's profile
    session_start();
    $_SESSION['username'] = $username;
    header("Location: " . $username . ".html");
    exit();
} else {
    // Invalid credentials
    echo "<p>Invalid username or password. Please try again.</p>";
}
?>
