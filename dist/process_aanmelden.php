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
$telefoon_nummer = $_POST['telefoon_nummer'];

// Insert data into the "aanmelden" table
$sql = "INSERT INTO deelnemers (first_name, last_name, email, telefoon_nummer)
        VALUES ('$first_name', '$last_name', '$email', '$telefoon_nummer')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: success.php")
?>