<html>
<head>
<title>Delete</title>
</head>
<body>
<form action="delete.php" method="POST">
Enter Name : <input type="text" name="name">
<input type="submit" name="Submit">
</form>
<?php
$conn=mysqli_connect("localhost","root","","project");
$deln=$_POST['name'];
$result=mysqli_query($conn,"Select * from batsman");
while($row=mysqli_fetch_array($result))
{
if($row['name']==$deln)
{
mysqli_query($conn,"Delete from batsman where name='$deln'");
}
}
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>