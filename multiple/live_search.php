<?php
include_once("db_connect.php");
if($_POST["query"] != '') {
	$searchData = explode(",", $_POST["query"]);
	$searchValues = "'" . implode("', '", $searchData) . "'";
	$queryQuery = "
		SELECT id, name, gender, address as location, designation, age 
		FROM developers 
		WHERE address IN (".$searchValues.")";
} else {
	$queryQuery = "
	SELECT id, name, gender, address as location, designation, age 
	FROM developers";
}
$resultset = mysqli_query($conn, $queryQuery) or die("database error:". mysqli_error($conn));
$totalRecord = mysqli_num_rows($resultset);
$htmlRows = '';
if($totalRecord) {
  while( $developer = mysqli_fetch_assoc($resultset) ) {
  $htmlRows .= '
	  <tr>
		   <td>'.$developer["name"].'</td>
		   <td>'.$developer["gender"].'</td>
		   <td>'.$developer["age"].'</td>
		   <td>'.$developer["location"].'</td>
		   <td>'.$developer["designation"].'</td>
	  </tr>';
  }
} else {
	$htmlRows .= '
		<tr>
			<td colspan="5" align="center">No record found.</td>
		</tr>';
}
$data = array(
	"html" => $htmlRows		
);
echo json_encode($data);	
?>