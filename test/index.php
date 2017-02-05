<html>
<head>
    <title>1,2,1,2, Test, Test</title>
    <link rel="stylesheet" type="text/css" href="../freestyler.css">
</head>

<form>
 Save this:
 <input type="text" name="save"><br>
</form>
</html>
<?php
$dir = '.';
echo "<h1>Inhalte dieses Verzeichnisses:</h1>";
$inhalte = scandir($dir);
asort($inhalte);

echo "<ul>";
foreach ($inhalte as $i) {
  if (!(substr($i,0,1) == "."))
  echo "<a href='".$i."'><li>".$i."</li></a>";
}
echo "<ul>";
 ?>
