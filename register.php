<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furniture";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT); // Hash the password

    
    $sql = "INSERT INTO user_data (full_name, email, password) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);

    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    
    if (!$stmt->bind_param("sss", $name, $email, $password)) {
        die("Binding parameters failed: " . $stmt->error);
    }

    $message="Account Created Successfully!!";
    $redirect_url="index.php";
    
    if ($stmt->execute()) {
        echo '<script>alert("' . $message . '"); window.location.href = "' . $redirect_url . '";</script>';
        // echo "Account created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>