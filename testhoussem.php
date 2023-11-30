<!DOCTYPE html>
<html>
<head>
  <title>Traitement</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $message = $_POST["message"];
    $adresse= $_POST["adresse"];
    $code = $_POST["code"];

    echo "<p>Message envoyé par : $prenom $nom $adresse $code</p>";
    echo "<p>Message : $message</p>";
  }
  ?>
</body>
</html>