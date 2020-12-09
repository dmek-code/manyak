<?php
<H1>Newsübersicht</H1>
 
<P>
<A HREF="Speichern2.php">Neue News anlegen</A>
</P>
 
<?php 
$mysqli = new mysqli('localhost', 'root', '', 'Lernen');
$eintraege = $mysqli->query("SELECT * FROM uebung");
 
foreach($eintraege as $eintrag) { 
 echo "
 <A 
 HREF='Select.php?id_kunden=".$eintrag['id_kunden']."'>
 ".$eintrag['name']."
 </A>";
 }?>