<?php
include "db.php" ;
 $category=$_POST['category'];
 
 if($con){
 	//echo "connected" ;

 	$sql="insert into category(category) values('$category')";
 	mysqli_query($con,$sql);
?>
<script type="text/javascript">
	alert("category added.");
	window.location="view-category.php" ;
</script>


<?php

 }

?>




