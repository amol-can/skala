<?php
    include 'config.php';
    $query = "SELECT DISTINCT Institute from dropout_dashboard where Institute IS NOT NULL";
    $result = $conn->query($query);

?>

<html>
<head>
<title>Line chart</title>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">google.charts.load('current', {'packages':['line']});</script>
      
</head>
<body>

  <select id="dropdown">
            <?php

                while($row=mysqli_fetch_array( $result)) {
                  echo "<option value=".$row['Institute'].">";
                  echo $row['Institute'];
                   echo "</option>";
              
                  }

            ?>
</select>
  <script src="dropout_charts/dropline.js"></script>
	<div id="line_top_x"></div>
</body>

</html>



