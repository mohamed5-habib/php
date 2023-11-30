<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $telephone = $_POST["telephone"];

  $fichier = fopen("contacts.txt", "a");
  fwrite($fichier, "$nom|$prenom|$telephone\n");
  fclose($fichier);

  echo "<h1>Contact enregistré avec succès !</h1>";
  echo "<p>Nom : $nom</p>";
  echo "<p>Prénom : $prenom</p>";
  echo "<p>Numéro de téléphone : $telephone</p>";
}
?>