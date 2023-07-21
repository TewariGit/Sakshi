<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    if ($conn) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $dob = $_POST["dob"];
        $parents_name = $_POST["parents_name"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];

        $query = "INSERT INTO students (first_name, last_name, dob, parents_name, address, city, phone)
                  VALUES ('$first_name', '$last_name', '$dob', '$parents_name', '$address', '$city', '$phone')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "New student added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>