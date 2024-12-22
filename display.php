<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudopretion";

// Create connection
include 'connect.php';

$sql = "SELECT * FROM crud";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr>
    <th>ID</th>
    <th>Name</th>
    <th>mobile</th>
    <th>Email</th>
    <th>password</th>
    <th>Opretion</th>
    </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["name"]. "</td>
        <td>" . $row["mobile"]. "</td>
        <td>". $row["email"]. "</td>
        <td>". $row["password"]. "</td>
        <td>
        <button><a href='update.php?updateid=".$row["id"]."'>Update</a></button>
        <button><a href='delete.php?deleteid=".$row["id"]."'>Delete</a></button>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
echo '<br><a href="index.php"><button>Add New Record</button></a>';
?>
