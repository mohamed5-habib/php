<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $note1 = $_POST["note1"];
  $note2 = $_POST["note2"];
  $note3 = $_POST["note3"];

  if (isset($_POST["calculer"])) {
    $moyenne = ($note1 + $note2 + $note3) / 3;
    echo "<h1>Résultat du calcul</h1>";
    echo "<p>Les notes saisies sont : $note1, $note2, $note3</p>";
    echo "<p>La moyenne est : $moyenne</p>";
  } elseif (isset($_POST["ajouter"])) {
    // Code pour incrémenter le numéro d'étudiant et vider les champs
    echo "<h1>Ajout d'une nouvelle note</h1>";
    echo "<p>Les notes saisies sont : $note1, $note2, $note3</p>";
    echo "<p>Numéro d'étudiant .</p>";
  }
}
?>