<!DOCTYPE html>
<html>
<head>
  <title>Traitement</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $traitement = $_POST["traitement"];
    $texte = $_POST["texte"];
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $nombre3 = $_POST["nombre3"];
    $nombre4 = $_POST["nombre4"];
    $nombre5 = $_POST["nombre5"];

    echo "<p>Texte saisi : $texte</p>";

    echo "<p>Nombres saisis :</p>";
    echo "<ul>";
    echo "<li>$nombre1</li>";
    echo "<li>$nombre2</li>";
    echo "<li>$nombre3</li>";
    echo "<li>$nombre4</li>";
    echo "<li>$nombre5</li>";
    echo "</ul>";

    $nombres = array($nombre1, $nombre2, $nombre3, $nombre4, $nombre5);

    if ($traitement === "min") {
      $min = min($nombres);
      echo "<p>Valeur minimale : $min</p>";
    } elseif ($traitement === "max") {
      $max = max($nombres);
      echo "<p>Valeur maximale : $max</p>";
    } elseif ($traitement === "tri") {
      sort($nombres);
      echo "<p>Tableau trié :</p>";
      echo "<ul>";
      foreach ($nombres as $nombre) {
        echo "<li>$nombre</li>";
      }
      echo "</ul>";
    }
  }
  ?>
</body>
</html>
</body>
</html>