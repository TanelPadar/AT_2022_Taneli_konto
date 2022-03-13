<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');
	
}
include_once('inc/header.php');
 ?>

 
 
 <div class="container">
        <div class="col-md-12">
        <h2>Welcome,<?php echo $_SESSION['user_email']; ?></h2>
 </div>
</div>

<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="text-left">
                <button type="button" onclick="location.href='insert.php';"  class="btn btn-secondary" >Add New</button>
                <button type="button" onclick="location.href='logout.php';" class="btn btn-primary ml-2">Log out</button>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<h1>History of training sessions</h1>

 




<?php
include_once 'conn/connection.php';
$result = mysqli_query($conn,"Select Date,Type,Category,Spent_time, notes, technology_tags FROM Training where id = 1");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Training Sessions</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class="table table-bordered border-primary">
  
  <tr>
    <th>Date</th>
    <th>Type</th>
    <th>Category</th>
    <th>Spent_Time</th>
    <th>notes</th>
    <th>technology_tags</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Date"]; ?></td>
    <td><?php echo $row["Type"]; ?></td>
    <td><?php echo $row["Category"]; ?></td>
    <td><?php echo $row["Spent_time"]; ?></td>
    <td><?php echo $row["notes"]; ?></td>
    <td><?php echo $row["technology_tags"]; ?></td>
    
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
