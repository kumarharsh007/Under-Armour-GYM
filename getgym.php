<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Your GYM</title><!--Title Of A Webpage-->
<style>
table {
  width: 100%;
  border-collapse: collapse;/*Styling Of Table*/ 
}

table, td, th {
  border: 1px solid yellow;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = ($_GET['q']);//geting value from html page
$con = mysqli_connect('localhost','root','','major');//connection to database
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));//connection to databases if failed
}

mysqli_select_db($con,"major");//select database
$sql="SELECT * FROM states WHERE City like '%$q%' limit 3";//sql query
$result = mysqli_query($con,$sql);//getting query results

echo "<table>
<tr>
<th>City</th>
<th>Address</th>
<th>Phone</th>
<th>Status</th>
</tr>";//creating table
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['City'] . "</td>";//printing data to table
  echo "<td>" . $row['Address'] . "</td>";
  echo "<td>" . $row['Phone'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);//closing connection
?>
</body>
</html>