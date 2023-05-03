<!DOCTYPE html>
<html>
<head>
<title> DREAM TEAM MANGA </title> </head>

<?php
//request form data

$animename= $_POST["animeName"];
$animeauthor= $_POST["animeAuthor"];
$animetype= $_POST["animeType"];
$animechap= $_POST["animeChapter"];
$animeyear= $_POST["animeYear"];
$animeprice= $_POST["animePrice"];
$animerate= $_POST["animeRate"];

?>

<h2> Your Manga Details </h2> <br>

<table border="1">
<tr>
<td> Book Title:  </td> 
<td><b><?php echo $animename;?> </b><td>
</tr>
<tr>
<td> Book Author: </td> 
<td><b><?php echo $animeauthor;?> </b></td>
</tr>
<tr>
<td> Book Genre: </td> 
<td><b><?php echo $animetype;?> </b></td>
</tr>
<tr>
<td> Book Chapters: </td> 
<td><b><?php echo $animechap;?> chapters </b></td>
</tr>
<tr>
<td> Book Year: </td> 
<td><b><?php echo $animeyear;?> </b></td>
</tr>
<tr>
<td> Book Price: </td>
<td><b> RM <?php echo $animeprice;?> </b></td>
</tr>
<tr>
<td> Book's Rating: </td>
<td><b><?php echo $animerate;?>  stars</b></td>
</tr>
</table>

<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="dt_mangadb";

$conn = new mysqli($host,$user,$pass,$db);
if ($conn->connect_error)
 {
	 die ("Connection failed." .$conn->connect_error);}
else 
{
	$queryInsert = "insert into BOOK (Book_Name,Book_Author,Book_Genre,Book_Chapter,Book_Year,Book_Price,Book_Rating)
	VALUES ('".$animename."', '".$animeauthor."', '".$animetype."', '".$animechap."', '".$animeyear."', '".$animeprice."', '".$animerate."')";
	
	if ($conn->query($queryInsert) == TRUE)
	{
		echo "<p style='color:blue;'>Success insert Manga data</p>";}
	else 
	{	
		echo "<p style='color:red;'> Error, cannot insert!!". $conn->error."</p>";}
}

$conn->close();
?>

<p>Click <a href="anime_form.html"> here </a> to INSERT your manga details</p>
<p> Click <a href="animeDisplay.php" > here </a> view ALL Manga Book Details. </p>

</body>
</html>