	<?php
include 'conexao.php';
$sql = mysql_query($conenction,"SELECT * FROM questoes") or die (mysql_error($connection));
	  ?>