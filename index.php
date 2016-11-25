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

    if (isset($_SESSION['circle'])) {
      $circle = unserialize($_SESSION['circle']);
    }

    if (!isset($circle)) {
      $circle = new circle();
    }

    if (isset($_SESSION['driehoek'])) {
      $driehoek = unserialize($_SESSION['driehoek']);
    }

    if (!isset($driehoek)) {
      $driehoek = new driehoek();
    }
  ?>
  <head>
    <title>Vierkant</title>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.js" integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA=" crossorigin="anonymous"></script>

    <style>
      .vierkant {
        width: <?php echo $vierkant->getWidth(); ?>px;
        height: <?php echo $vierkant->getHeight(); ?>px;
        background-color: <?php echo $vierkant->getColor(); ?>;
      }

      .circle {
        width: <?php echo $circle->getWidth(); ?>px;
        height: <?php echo $circle->getHeight(); ?>px;
        background-color: <?php echo $circle->getColor(); ?>;
        border-radius: <?php echo $circle->getRadius(); ?>px;
      }

      .driehoek {
        border-top: <?php echo $driehoek->getHeight(); ?>px solid <?php echo $driehoek->getColor(); ?>;
        border-left: <?php echo $driehoek->getWidth() / 2;?>px solid transparent;
        border-right: <?php echo $driehoek->getWidth() / 2;?>px solid transparent;
        width:0;
        height:0;

        -webkit-animation:spin <?php echo $driehoek->getRotation();?>s linear infinite;
        -moz-animation:spin <?php echo $driehoek->getRotation();?>s linear infinite;
        animation:spin <?php echo $driehoek->getRotation();?>s linear infinite;
      }
      @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
      @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
      @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
    </style>

    <script>
      $(document).ready(function(){
        $('#choice').change(function(){
          switch (parseInt($('#choice').val())) {
            case 1:
              $('#radius').hide();
              $('#diameter').hide();

              $('#height').show();
              $('#width').show();

              $('#rotation').hide();
            break;

            case 2:
              $('#radius').show();
              $('#diameter').show();

              $('#height').hide();
              $('#width').hide();

              $('#rotation').hide();
            break;

            case 3:
              $('#height').show();
              $('#width').show();

              $('#radius').hide();
              $('#diameter').hide();

              $('#rotation').show();
            break;
          }
        });
      });
    </script>
  </head>

  <body>
    <form method="POST" action="script.php">
      <select name="choice" id="choice">
        <option value="1">Vierkant</option><br>
        <option value="2">Circle</option><br>
        <option value="3">Driehoek</option>
      </select>

      <input type="color" name="color">
      <input type="number" name="width" placeholder="Width" id="width">
      <input type="number" name="height" placeholder="Height" id="height">

      <input type="number" name="radius" placeholder="Radius" id="radius" style="display:none;">
      <input type="number" name="diameter" placeholder="Diameter" id="diameter" style="display:none;">

      <input type="number" name="rotation" placeholder="Rotation" id="rotation" style="display:none;">

      <input type="submit">
    </form>

    <h1>Uitkomst:</h1>
    <div class="vierkant"></div>
    <div class="circle"></div>
    <div class="driehoek"></div>
  </body>
</html>
