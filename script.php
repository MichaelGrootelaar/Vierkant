<?php
  session_start();
  require_once("class.php");

  $vierkant = new vierkant();
  $vierkant->setWidth($_POST['width']);
  $vierkant->setHeight($_POST['height']);
  $vierkant->setColor($_POST['color']);

  $_SESSION['vierkant'] = serialize($vierkant);
  header('Location: index.php');
?>
