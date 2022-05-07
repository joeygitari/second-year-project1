<?php
include 'includes/dbh.inc.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM user WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();

        if ($row['numrows'] > 0) {
            if (password_verify($password, $row['password'])) {
                if ($row['first_name'] == 'admin') {
                    $_SESSION['admin'] = $row['user_id'];
                } else {
                    $_SESSION['user'] = $row['user_id'];
                }
            } else {
                $_SESSION['error'] = 'Incorrect password';
            }
        } else {
            $_SESSION['error'] = 'Email not found';
        }
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
    header('location: login.php');
}
