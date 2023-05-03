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

<p>Click <a href="anime_form.html"> here </a> to insert your manga details</p>

</body>
</html>