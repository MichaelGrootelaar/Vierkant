<?php
  session_start();
  require_once("class.php");

  switch($_POST['choice']){
    case 1:
      $vierkant = new vierkant();
      $vierkant->setWidth($_POST['width']);
      $vierkant->setHeight($_POST['height']);
      $vierkant->setColor($_POST['color']);

      $_SESSION['vierkant'] = serialize($vierkant);
    break;

    case 2:
      $circle = new circle();
      $circle->setWidth($_POST['diameter']);
      $circle->setHeight($_POST['diameter']);
      $circle->setColor($_POST['color']);
      $circle->setRadius($_POST['radius']);

      $_SESSION['circle'] = serialize($circle);
    break;

    case 3:
      $driehoek = new driehoek();
      $driehoek->setWidth($_POST['width']);
      $driehoek->setHeight($_POST['height']);
      $driehoek->setColor($_POST['color']);
      $driehoek->setRotation($_POST['rotation']);

      $_SESSION['driehoek'] = serialize($driehoek);
    break;
  }

  header('Location: index.php');
?>
