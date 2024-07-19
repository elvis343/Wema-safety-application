<?php
require_once "dbconnection.inc.php";

session_start();

if (isset($_POST['login'])) {
    // Sanitize input
    $id = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `Email_Address` = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pass = $row['Password'];
        $type = $row['User_Type'];

        // Verify password
        if (password_verify($password, $pass)) {
            // Regenerate session ID
            session_regenerate_id(true);

            // Set session variables based on user type
            if ($type == "Administrator") {
                $_SESSION['adminname'] = $row['User_ID'];
                header("Location: index.php");
                exit();
            } else if ($type == "User") {
                $_SESSION['username'] = $row['User_ID'];
                header("Location: index1.php");
                exit();
            } else if ($type == "Contact") {
                $_SESSION['conname'] = $row['User_ID'];
                header("Location: index2.php");
                exit();
            }
        } else {
            echo "Incorrect Password.";
        }
    } else {
        echo "User does not exist.";
    }
}
?>
