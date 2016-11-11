<?php ?>
<HTML>
<body>

<title>Tutorium Programmieren - KIT</title>
<h1>Tutorium</h1>

<p>
  <a href="https://sdqweb.ipd.kit.edu/wiki/Vorlesung_Programmieren_WS16/17#tab=Vorlesungsfolien">Vorlesungsfolien</a>
</p>
<ol start="0">
<?php
$folien = scandir('folien'); //Ordner "files" auslesen

asort($folien);  //nach Dateinamen sortieren
foreach ($folien as $datei) { // Ausgabeschleife
  if (!(substr($datei,0,1) == "."))
   echo "<li>".$datei."</li>"; //Ausgabe Einzeldatei
};
?>

</ol>
</body>
</HTML>
