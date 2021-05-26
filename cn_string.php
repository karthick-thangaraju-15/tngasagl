 

<?php 

$conn = mysqli_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db($conn,"bookew6m_tngasagl");
	 date_default_timezone_set("Asia/Kolkata");
?>

<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bookew6m_tngasagl;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
