
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$con = mysqli_connect('localhost','phplink','phpsqllink');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"landdeeds");
$sql="SELECT * FROM landdeeds";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Date</th>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DATE'] . "</td>";
  echo "<td>" . $row['Last_Name_Grantor_1'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html> 