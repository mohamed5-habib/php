<?php
$fichier = fopen("contacts.txt", "r");
if ($fichier) {
  echo "<h1>Liste des contacts</h1>";
  while (($ligne = fgets($fichier)) !== false) {
    $contact = explode("|", $ligne);
    $nom = $contact[0];
    $prenom = $contact[1];
    $telephone = $contact[2];

    echo "<p>Nom : $nom</p>";
    echo "<p>Prénom : $prenom</p>";
    echo "<p>Numéro de téléphone : $telephone</p>";
    echo "<hr>";
  }
  fclose($fichier);
} else {
  echo "<p>Aucun contact enregistré.</p>";
}
?>