


<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adms_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['register'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Validate form data
    if ($password != $confirm_password) {
        echo "Error: Passwords do not match.";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into database
    $sql = "INSERT INTO clients (FirstName, LastName, Email, PhoneNumber, Password)
          VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php
session_start(); // Add this line to start a session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adms_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM clients WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['Password'])) {
            // Login success
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $row['FirstName'];
            header('Location: Login.php'); // Replace with your dashboard page URL
        } else {
            // Login failed
            echo "Invalid email or password.";
        }
    } else {
        // Login failed
        echo "Invalid email or password.";
    }
}


?>
