<?php
    include("database.php"); //DB Connection
    include("index.html"); //Login page

    //CODE HERE
    //Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate if both fields are filled
        if (empty($username) || empty($password)) {
            echo '<script>alert("Both username and password are required."); window.location.href = "index.php";</script>';
            exit();
        }

        // Validate username and password against the "users" table
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $stored_password = $row['password'];
            $org = $row['organization'];

            // Verify the provided password against the hashed password
            if (password_verify($password, $stored_password)) {
                // Successful login, redirect to dashboard page

                //START SESSION
                session_start();
                $_SESSION["user"] = $username;
                $_SESSION["org"] = $org;
                // echo "Hello {$_SESSION["user"]}, {$_SESSION["org"]}";

                header("Location: dashboard.php");
                exit();
            } else {
                // Invalid password
                echo '<script>alert("Invalid password."); window.location.href = "index.php";</script>';
                exit();
            }
        } else {
            // Invalid username
            echo '<script>alert("Invalid username."); window.location.href = "index.php";</script>';
            exit();
        }
    }

    if($conn)
        mysqli_close($conn);
?>