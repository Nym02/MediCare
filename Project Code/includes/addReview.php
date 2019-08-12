<?php
if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';



    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $textArea = mysqli_real_escape_string($conn, $_POST['textArea']);


    $sql = "INSERT INTO reviews (Name,Email,Review) VALUES('$name','$email','$textArea')";
    mysqli_query($conn, $sql);
} else {
    echo 'Not submitted';
}
