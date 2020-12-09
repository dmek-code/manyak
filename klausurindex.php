<?php
//Verbindung herstellen
$verbindung = mysqli_connect('localhost','benutzer','passwort','klausur');
//Verbindung überprüfen
if(mysqli_connect_errno()){
    echo "Fehler bei DB Verbindung" .mysqli_connect_error();
}
?>

<html>
<body>
    <form action="klausurindex.php" method="POST">
        <label for="Anrede">Anrede:</label>
    <select name="Anrede"> 
        <option value="M">Männlich</option>
        <option value="W">Weiblich</option>
        <option value="D">Divers</option>    
    </select> <br>
        <label for="Name">Name:</label>
    <input type="text" name="Name"> <br>
        <label for="vorname">Vorname:</label>
    <input type="text" name="vorname"> <br>

    
    <input type="hidden" value="1" name="pb">
    <input type="submit" value="Senden">
    

    </form>
</body>
</html>



<?php
if(isset($_POST['pb']))
{


    echo "Anrede:" . $_POST["Anrede"];
    echo "<br>";
    echo "Name:" . $_POST["Name"];
    echo "<br>";
    echo "Vorname:" . $_POST["vorname"];
    echo "<br>";

 $verbindung = new mysqli('localhost','benutzer','passwort','klausur');
 $sql = "INSERT INTO anmeldung(anrede,name,vorname)
    Values('".$_POST["Anrede"]. "','" .$_POST["Name"]. "','" .$_POST["vorname"]."')";
    $verbindung->query($sql);
    $verbindung->close();

}


?>