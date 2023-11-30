<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["vendre"])) {
      header("Location: page_vente.html");
      exit();
    } elseif (isset($_POST["acheter"])) {
      header("Location: page_achat.html");
      exit();
    } elseif (isset($_POST["louer"])) {
      header("Location: page_location.html");
      exit();
    }
  }
  ?>