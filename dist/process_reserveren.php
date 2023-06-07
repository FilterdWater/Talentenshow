<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "talentshow";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];

// Insert data into the "reserveren" table
$sql = "INSERT INTO aanwezigen (first_name, last_name, email)
        VALUES ('$first_name', '$last_name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Reservation successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: success.php")
?>
