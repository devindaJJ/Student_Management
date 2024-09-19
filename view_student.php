<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>
<body>
    <h2>View Students</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["first_name"]."</td>
                        <td>".$row["last_name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["age"]."</td>
                        <td>".$row["course"]."</td>
                        <td>
                            <a href='edit_student.php?id=".$row["id"]."'>Edit</a> |
                            <a href='delete_student.php?id=".$row["id"]."'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No students found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
