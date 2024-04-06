<?php
  // get the dimensions of the triangular pyramid from the textfields
  $side_a = $_POST['sidea'];
  $side_b = $_POST['sideb'];
  $height = $_POST['height'];


  // formula to calculate volume 
  $volume =  ($height * $side_a * $side_b) * 1/6;

?>
<h3>Results:</h3>
The volume of the triangular pryramid is <?php echo round($volume,2) ?> cm<sup>2</sup>.


