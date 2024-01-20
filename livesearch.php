<?php

// Creates connection
include('connection.php');
$name =  $_POST['name'];
if ($name != null || $name != '') {
	$sql = "SELECT * FROM phonebook1 WHERE CONCAT(JOBTITLE,EXTENSION,NAMES,FLOOR) LIKE '%" . $_POST['name'] . "%'";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "	<tr>
		          <td>" . $row['JOBTITLE'] . "</td>
		          <td>" . $row['EXTENSION'] . "</td>
		          <td>" . $row['NAMES'] . "</td>
		          <td>" . $row['FLOOR'] . "</td>
		        </tr>";
		}
	} else {
		echo "<tr><td>No record found <strong>please avoid the use of abbreviations</strong>. Check and try again!</td></tr>";
	}
}

?>