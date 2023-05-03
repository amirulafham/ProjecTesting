<!DOCTYPE html>
<html>
<head>
<title> DREAM TEAM MANGAAAAAAAAA </title> </head>

<body>
<h2>DREAM TEAM MANGA LIST</h2>

<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="dt_mangadb";

$conn = new mysqli($host,$user,$pass,$db);
if ($conn->connect_error)
 {
	 die ("Connection failed." .$conn->connect_error);
	}
else 
{
	$queryView = " SELECT * FROM BOOK ";
	$resultQ = $conn ->query($queryView);
	
?>
<table border ="2">
<tr>
	<th> Book ID </th>
	<th> Book Title </th>
	<th> Book Author </th>
	<th> Book Genre </th>
	<th> Book Chapters </th>
	<th> Book Year </th>
	<th> Book Price </th>
	<th> Book Rating </th>
</tr>
<?php
 if ($resultQ->num_rows> 0){
	 while ($row = $resultQ->fetch_assoc())
{
	 ?>
	 
	 <tr>
		<td> <?php echo $row["Book_Id"]?> </td>
		<td> <?php echo $row["Book_Name"]?></td>
		<td> <?php echo $row["Book_Author"]?></td>
		<td> <?php echo $row["Book_Genre"]?></td>
		<td> <?php echo $row["Book_Chapter"]?></td>
		<td> <?php echo $row["Book_Year"]?></td>
		<td> <?php echo $row["Book_Price"]?></td>
		<td> <?php echo $row["Book_Rating"]?></td>
	</tr>

	<?php
}
 }
  else 
 {
   echo "<tr><td colospan='8'> NO data selected </td></tr>";	
	
 }
 ?>
 </table>
 
 <?php
  $conn-> close();
}
 ?>
 
 <br>
Click <a href="anime_form.html"> here </a> to enter new Manga details. <br><br>
Click <a href="anime_deleteView.php"> here </a> to view Manga List <br><br>
</body>
</html>