<!DOCTYPE html>
<html>
<head>
  <title>Exercice 3 - Calculatrice</title>
</head>
<body>
  <h1>Calculatrice</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $operation = $_POST["operation"];
    $resultat = "";

    switch ($operation) {
      case "addition":
        $resultat = $nombre1 + $nombre2;
        break;
      case "soustraction":
        $resultat = $nombre1 - $nombre2;
        break;
      case "multiplication":
        $resultat = $nombre1 * $nombre2;
        break;
      case "division":
        if ($nombre2 != 0) {
            $resultat = $nombre1 / $nombre2;
        } else {
          $resultat = "Erreur : division par zéro";
        }
        break;
    }

    echo "<h2>Résultat :</h2>";
    echo "<p>$nombre1 $operation $nombre2 = $resultat</p>";
  }
  ?>
</body>
</html>