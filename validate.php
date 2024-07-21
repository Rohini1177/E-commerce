<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furniture";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id, full_name, email, password FROM user_data WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    if (!$stmt->bind_param("s", $email)) {
        die("Binding parameters failed: " . $stmt->error);
    }

    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        header ('Location: index.php');
        $message = "Login successful! Welcome, " . $user['full_name'] . "!";
    } else {
        $message = "Invalid email or password!";
    }

    $stmt->close();
}

$conn->close();
?>