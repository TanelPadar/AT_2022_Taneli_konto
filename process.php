<?php
include_once 'conn/connection.php';
if(isset($_POST['save']))
{	 
	 $kuupaev = $_POST['kuupaev'];
	 $tyyp = $_POST['tyyp'];
	 $kategooria = $_POST['kategooria'];
	 $aeg = $_POST['aeg'];
	 $markmed = $_POST['markmed'];
	 $tagid = $_POST['tagid'];
	 $sql = "INSERT INTO Training (id,Date,Type,Category,Spent_time,notes,technology_tags)
	 VALUES ('1','$kuupaev','$tyyp','$kategooria','$aeg','$markmed','$tagid')";
	 if (mysqli_query($conn, $sql)) {
	    
	
		
	    header("location:dashboard.php");
	    
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>