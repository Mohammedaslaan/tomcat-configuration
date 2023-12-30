<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDS Connection Test</title>
</head>
<body>

    <?php
    $servername = 'database.c9qjptgz0qfk.ap-south-1.rds.amazonaws.com';
    $username = 'root';
    $password = 'root12345';
    $database = 'jspDiary';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        echo '<h2>Connection Failed:</h2>';
        echo '<p>' . $conn->connect_error . '</p>';
    } else {
        echo '<h2>Connection Successful!</h2>';
        // Additional code or information can be displayed here
        // For example, you can run queries or fetch data from the database
    }

    // Close connection
    $conn->close();
    ?>

    <div>
        <p>This is a basic HTML content to show that the page is working.</p>
        <p>Feel free to add more content or customize this page as needed.</p>
        <a href="#">Sample Link</a>
    </div>

</body>
</html>

