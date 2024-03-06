<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>

    <form action="add_user.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required><br>

        <label for="organization">Organization:</label>
        <input type="text" name="org" id="org" required><br>

        <input type="submit" value="Add User">
    </form>

</body>
</html>

<?php
include("database.php");
// include(""); //include html

//CODE HERE
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $org = strtolower(mysqli_real_escape_string($conn, $_POST["org"]));

    // Validate if all fields are filled
    if (empty($name) || empty($username) || empty($password) || empty($email) || empty($phone) || empty($org)) {
        echo '<script>alert("All fields are required."); window.location.href = "add_user.php";</script>';
        exit();
    }

    //Alert for duplicate entry 'username' ---------

    // Hash the password (for security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO users (name, username, password, email, phone, organization) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssis", $name, $username, $hashed_password, $email, $phone, $org);
        $stmt->execute();

        // Check if the user was successfully added
        if ($stmt->affected_rows > 0) {
            echo '<script>alert("User added successfully."); window.location.href = "dashboard.php";</script>';
        } else {
            echo '<script>alert("Failed to add user."); window.location.href = "add_user.php";</script>';
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error in prepared statement: " . $conn->error;
    }
}

if($conn)
mysqli_close($conn);
?>