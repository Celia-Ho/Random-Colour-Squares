<!-- Random Colour Squares -->

<?php
  $colors = array('red', 'green', 'blue', 'black', 'white', 'purple', 'orange', 'yellow','pink', 'gray', 'brown', 'skyblue');
  // $colors = array('#FF0000', '#00FF00', '#0000FF', '#000000', '#FFFFFF', '#F0F0F0', ...);  // Hex values
  $color_count = count($colors);  // count number of keys in array of $colors
  ?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Random Colors</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      /* random background color styling, "rand" with pick random number between min and max values  */
      background: <?php echo $colors[rand(0,$color_count-1)]; ?>;  
    }
    .area {
      float: left;
      margin: 0; padding: 0;
      width: 50px; height: 50px;
    }
    #area1 {
      /* random background color styling  */
      background: <?php echo $colors[rand(0,$color_count-1)]; ?>; 
    }
  	</style>
  </head>

  <body>
  <!-- 1st square: with area1 random background color styling -->
  <div class="area" id="area1"></div>
  <!-- 2nd Square:  in-line styling with randon bg color -->
  <div class="area" id="area2" style="background: <?php echo $colors[rand(0,$color_count-1)]; ?>;"></div>
  <!-- 1000 more squares looping through a for loop with random background color styling -->
  <?php
    $squares = 1000;
    for($i=0; $i < $squares; $i++) {
      echo "<div class=\"area\" id=\"area2\" style=\"background: {$colors[rand(0,$color_count-1)]}\"></div>";
    }
  ?>      
  </body>
</html>
