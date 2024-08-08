<?php
$conn = new mysqli('localhost', 'root', '', 'medicare');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, specialty, phone, email FROM doctors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Doctors</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" hre="./script/script.js">
    </script>
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <h1>List of Doctors</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Specialty</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["specialty"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["email"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No doctors found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>

</html>