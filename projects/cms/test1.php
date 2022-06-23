<?php
$host = "localhost";
$port = "5432";
$dbname = "sis_db";
$user = "postgres";
$password = ""; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

$result=pg_query($dbconn,"select * from public.user1");


?>

<!DOCTYPE html>
<html>
 <head>
 <title> Student Data</title>
 </head>
<body>

<form action="showinfo.php" method=post>
<style id="table_style" type="text/css">
    body
    {
        font-family: Arial;
        font-size: 20pt;
    }
    table
    {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    table th
    {
        background-color: #F7F7F7;
        color: #333;
        font-weight: bold;
    }
    table th, table td
    {
        padding: 5px;
        border: 1px solid #ccc;
    }
</style>



<h1>Student Information</h1>
 <div id="dvContents" style=" padding: 5px; width:350px">
<table cellspacing="0" rules="all" border="1">
	<tr>
		<td>Teacher Name</td>
		<td>Lecture</td>
		<td>Div</td>
		

	</tr>
<?php
$i=0;
while($row=pg_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $row["teacher_name"]; ?></td>
		<td><?php echo $row["lecture"]; ?></td>
		<td><?php echo $row["div"]; ?></td>
		
	</tr>
<?php
$i++;
}
?>
</table>
</div>
</form>
</body>
</html>
