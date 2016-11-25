<!DOCTYPE html>
<html>
  <?php
    session_start();
    require_once("class.php");

    if (isset($_SESSION['vierkant'])) {
      $vierkant = unserialize($_SESSION['vierkant']);
    }

    if (!isset($vierkant)) {
      $vierkant = new vierkant();
    }
  ?>
  <head>
    <title>Vierkant</title>
    <style>
      .vierkant {
        border: 1px solid #000;
        width: <?php echo $vierkant->getWidth(); ?>px;
        height: <?php echo $vierkant->getHeight(); ?>px;
        background-color: <?php echo $vierkant->getColor(); ?>;
      }
    </style>
  </head>

  <body>
    <form method="POST" action="script.php">
      <input type="number" name="width" placeholder="width">
      <input type="number" name="height" placeholder="height">
      <input type="color" name="color">
      <input type="submit">
    </form>

    <h1>Uitkomst:</h1>
    <div class="vierkant"></div>
  </body>
</html>
