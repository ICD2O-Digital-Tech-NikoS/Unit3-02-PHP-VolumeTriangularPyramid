<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Area of a Trapezoid"" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./faviconfolder/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./faviconfolder/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./faviconfolder/favicon-16x16.png" />
    <link rel="manifest" href="./faviconfolder/site.webmanifest" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Volume of a Triangular Pyramid</title>
  </head>
  <body>
    <!-- php echo to print the html to the page, displays title and subheading -->
    <?php 
      echo "<h1>Volume of a Triangular Pyramid</h1>";
    ?>
    <img src="./images/formula.jpg" alt="formula"> <br>
    <?php
      echo "<h3>This program will calculate the volume of a triangular pyramid.</h3>";
    ?>
    <!-- form to get dimensions of a triangular pyramid from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="sidea">Side A:</label>
      <input type="text" id="sidea" step="any" placeholder="Side A (cm)" name="sidea"><br><br>
      <label for="sideb">Side B: </label>
      <input type="text" id="sideb" step="any" placeholder="Side B (cm)" name="sideb"><br><br>
      <label for="height">Height, h: </label>
      <input type="text" id="height"step="any" placeholder="Height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Area">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			

      </iframe>

    <br>
  </body>
</html>