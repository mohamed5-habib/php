<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = $_POST["nom"];
  $age = $_POST["age"];
  $mail = $_POST["mail"];
  $don = $_POST["don"];

  $fichier = fopen("resultats.txt", "a");
  fwrite($fichier, "$nom | $age | $mail | $don\n");
  fclose($fichier);

  echo "<h1>Don enregistré avec succès !</h1>";
  echo "<p>Nom : $nom</p>";
  echo "<p>Âge : $age</p>";
  echo "<p>Mail : $mail</p>";
  echo "<p>Valeur du don : $don</p>";
}
?>