<?php
$Name=$_POST['Name'];
$Country =$_POST['Country'];
$Rank=$_POST['Ranking'];
$servername = "localhost";                                      
$username = "root";
$password = "";
$dbname = "ashish";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die('Connection Failed');
}
else{
echo("Connected successfullt\n\n");
echo"<br>";
echo"$Name";
echo"<br>";
echo"$Country";
echo"<br>";
echo"$Rank";
echo"<br>";
$stmt = $conn->prepare("INSERT INTO batsman values(?,?,?)");
$stmt->bind_param("ssi",$Name,$Country,$Ranking);
$stmt->execute();
echo("Registered successfully");
$stmt->close();
$conn->close();
}
?>
