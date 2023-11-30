<?php
$donnees = file("resultats.txt");

$totalDon = 0;
$totalAges = 0;
$nombreParticipants = count($donnees);

foreach ($donnees as $donnee) {
  $infos = explode(" | ", $donnee);
  $don = intval($infos[3]);
  $age = intval($infos[1]);

  $totalDon += $don;
  $totalAges += $age;
}

$moyenneAges = $totalAges / $nombreParticipants;

echo "<h1>Résultats du sondage</h1>";
echo "<p>Somme globale reçue : $totalDon</p>";
echo "<p>Moyenne d'âges des participants : $moyenneAges</p>";
?>