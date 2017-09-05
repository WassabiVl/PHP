<?php
//to include a file
require_once("C:\Users\Wassabi.vl\Documents\GitHub\PHP\PHP\Coding-Assignment.php"); //manditory to find the file
include_once("C:\Users\Wassabi.vl\Documents\GitHub\PHP\PHP\Coding-Assignment.php"); //the script will run without it
//Rules
// file must be in a unrestricted file
// no white spaces in the file
// variables have to be stored in a secure location where apache cant open or access them\


// alternating table row function_exists
//set the css
tr.row1 { background-color: gray;}
tr.row2 ( background-color: white;}
function table_row_format(&$row_counter) {
	// Return row class for a row
	if ($row_counter & 1) {
		$row_color = "row2";
	} else {
		$row_color = "row1";
	}
	$row_counter++;
	return $row_color;
}
//SQL Connection
$mysqli = new mysqli("localhost", "my_user", "my_password", "database_name");
//SQL Select statement
$sql = "SELECT * FROM customers";
$results = @mysql_query($sql, $mysqli) or die; //deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0.
$results = @mysqli_query($sql, $mysqli) or die; // PHP version => 7

echo "<table>";
$i = 0;
while($row = mysql_fetch_array($results)){
	/* print results*/
	$row_class = table_row_format($i);
echo "<tr class=\"$row_class"\"><td>$row[product_name]</td></tr>"; }
echo"</table>";


?>