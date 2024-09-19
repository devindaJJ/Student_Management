<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="submit_student.php" method="post">
        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" required><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
