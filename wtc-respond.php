<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>WTC Anmeldung</title>
</head>

<body>
    <div class="header">
        <img src="logo.jfif">
    <?php

    // servername => localhost 
    // username => root 
    // password => empty 
    // database name => wtc_registration
    $conn = mysqli_connect("localhost", "root", "", "wtc_registration");

    // Check connection 
    if ($conn === false) {
        die("Fehler: Verbindung fehlgeschlagen. "
            . mysqli_connect_error());
    }

    $vor_name =  $_REQUEST['vor_name'];
    $nach_name = $_REQUEST['nach_name'];
    $email = $_REQUEST['email'];
    $firma =  $_REQUEST['Firma'];

    $sql = "INSERT INTO wtc_registration  VALUES ('$vor_name',  
        '$nach_name','$email','$firma')";

    if (mysqli_query($conn, $sql)) {
        echo "<div>Vielen Dank! Sie haben sich erfolgreich für die webconia Technology Conference 2021 angemeldet.</div>";
    } else {
        echo "Fehler: $sql. "
            . mysqli_error($conn);
    }
    // Close connection 
    mysqli_close($conn);
    ?>
    </div>
</body>

</html>