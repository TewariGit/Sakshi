<!DOCTYPE html>
<html>
<head>
    <title>School Student Management System</title>
</head>
<body>
    <h2>Add New Student</h2>
    <form action="process.php" method="post">
        <label>First Name:</label>
        <input type="text" name="first_name" required><br>
        <label>Last Name:</label>
        <input type="text" name="last_name" required><br>
        <label>Date of Birth:</label>
        <input type="date" name="dob" required><br>
        <label>Parent's Name:</label>
        <input type="text" name="parents_name" required><br>
        <label>Address:</label>
        <input type="text" name="address" required><br>
        <label>City:</label>
        <input type="text" name="city" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br>
        <input type="submit" value="Add Student">
    </form>

    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Parent's Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone</th>
        </tr>
        <br />
<b>Warning</b>:  mysqli_connect(): (HY000/1045): Access denied for user 'username'@'localhost' (using password: YES) in <b>C:\xampp\htdocs\sakshi\index.php</b> on line <b>40</b><br />
    </table>
</body>
</html>