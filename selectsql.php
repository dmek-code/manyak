<?php
$link = mysqli_connect("localhost", "root", "", "Lernen");
 
if($link === false){
 die("Fehler beim Verbindnug " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM uebung";
if($result = mysqli_query($link, $sql)){
 if(mysqli_num_rows($result) > 0){
 echo "<table>";
 echo "<tr>";
 echo "<th>Kundennummer</th>";
 echo "<th>Anrede</th>";
 echo "<th>Name</th>";
 echo "<th>Vorname</th>";
 
 echo "</tr>";
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id_kunden'] . "</td>";
 echo "<td>" . $row['anrede'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['vorname'] . "</td>";
 
 echo "</tr>";
 }
 echo "</table>";
 
 mysqli_free_result($result);
 } else{
 echo "Keine Daten gefunden.";
 }
} else{
 echo "ERROR: $sql. " . mysqli_error($link);
}
 
 
mysqli_close($link);
?>