<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/artpage.css">
    <title>My Art</title>
</head>

<body>
    <div id="head">
        <a href="homePage.html" class="navigation" id="home">Home</a>
        <div class="navigation">
            <a href="#" class="navigation other">Web Development</a>
            <a href="artPage.php" class="navigation other">Art</a>
        </div>
    </div>

    <div id="top">

        <div class="logo">
            <div class="mell">Art</div>
            <div class="crafts">Page</div>
        </div>
    </div>
        <div class="container">

        </div>
        <div class="container">
            <div class="row">
                <div class="drawing">
                    <img src="img/popstars.png">
                    <h2>The Angels</h2><br>
                </div>
                <div class="drawing">
                    <img src="img/faithfullbasterdoutfit.png">
                    <h2>FanArt</h2><br>
                </div>
                <div class="drawing">
                    <img src="Img/HydroArchon.png">
                    <h2>Hydro Archon</h2><br>
                </div>

            </div>

            <div class="row">
                <div class="drawing">
                    <img src="img/DndCharacter.png">
                    <h2>Kaida</h2><br>
                </div>
                <div class="drawing">
                    <img src="img/redraw.png">
                    <h2>Melody</h2><br>
                </div>
                <div class="drawing">
                    <img src="img/Spider sona.png">
                    <h2>Spider Sona</h2><br>
                </div>
            </div>


        </div>


        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "art";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully";

        $sql = "SELECT * FROM drawings"; // art defines the name of the tabel
        $result = $conn->query($sql);

        // if ($result->num_rows > 0) {
        //     // output data of each row
        //     while ($row = $result->fetch_assoc()) {
        //         echo "Name of Drawing <br>" . $row["Name"] . "<br> " . $row["Description"] . "<br>";
        //     }
        // } else {
        //     echo "0 results";
        // }
        ?>





</body>

</html>