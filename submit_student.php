<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (first_name, last_name, email, age, course)
            VALUES ('$first_name', '$last_name', '$email', '$age', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
