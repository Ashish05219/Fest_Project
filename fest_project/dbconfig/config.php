<?php
/*For My LocalPC*/
/*for establishing the connection */
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'samplelogindb');
?>


