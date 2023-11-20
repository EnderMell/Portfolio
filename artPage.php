<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>My Art</title>
</head>

<body>
    <div id="head">
        <a href="homePage.html" class="navigation" id="home">Home</a>
        <div class="navigation">
            <a href="#" class="navigation other">Web Development</a>
            <a href="artPage.html" class="navigation other">Art</a>
        </div>
    </div>
    <div id="top">
        <img id="pfp" src="Img/Pfp.png">
        <div id="toptext">
            <h2>Michelle Tuinbeek</h2>
        </div>
    </div>

    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "art";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
 ?>

</body>

</html>