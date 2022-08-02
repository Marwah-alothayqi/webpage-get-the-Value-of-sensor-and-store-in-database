<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=sensors", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 echo "Connection successful ";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
if(isset($_GET['save']))
{
	//print_r($_GET);
	$sql = "INSERT INTO sensors(Svalues) VALUES('".addslashes($_GET['Svalues'])."')";
	$conn->query($sql);
}

?>

<html>
<body>

<form  action="" method="GET">
<label for="Svalues">Input sensor value</label>
<input type="number" name="Svalues">
<input type="submit"name="save">
</form>

</body>
</html>  