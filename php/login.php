<?php
include_once "conn.php";
session_start();


if (isset($_POST["login"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT user_id,user_password FROM user where user_email = '$email'  ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if (password_verify($pwd, $row['user_password'])) {
                if ($_POST['remember'] == 'checked') {
                    $cookie_name = "user";
                    $cookie_value = $row['user_id'];
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
                    $_SESSION["user"] = $row['user_id'];
                    header("location:../frontend/view/");
                } else {
                    $_SESSION["user"] = $row['user_id'];
                    header("location:../frontend/view/");
                }
            } else {
                echo 'Invalid password.';
            }
        }
    } else {
        echo "0 results";
    }
} else {
    $naam = mysqli_real_escape_string($conn, $_POST['naam']);
    $voornaam = mysqli_real_escape_string($conn, $_POST['vnm']);
    $leeftijd = mysqli_real_escape_string($conn, $_POST['lftd']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `user`(`user_voornaam`, `user_naam`, `user_email`, `user_age`, `user_password`)
    VALUES ('$voornaam','$naam','$email',$leeftijd,'$pwd')";

    if ($conn->query($sql) === TRUE) {
        header("location:../frontend/");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
