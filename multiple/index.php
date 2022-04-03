<?php 
include('header.php');
?>
<title>phpzag.com : Demo Live Data Search with Multiselect Dropdown using Ajax, PHP & MySQL</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<?php include('container.php');?>
<div class="container">		
	<h1>Example: Live Data Search with Multiselect Dropdown using Ajax, PHP & MySQL</h1>		
	<br>
	<select name="multiSelectSearch" id="multiSelectSearch" multiple class="form-control selectpicker" title="Live data search by location...">
		<?php
		include_once("db_connect.php");
		$sql_query = "SELECT DISTINCT address as location FROM developers LIMIT 10";
		$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
		while( $developer = mysqli_fetch_assoc($resultset) ) {
			echo '<option value="'.$developer["location"].'">'.$developer["location"].'</option>'; 
		}
		?>
	</select>
	<input type="hidden" name="location" id="location" />
	<div style="clear:both"></div>
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Location</th>
				<th>Designation</th>     
				</tr>
			</thead>
			<tbody>	
			</tbody>
		</table>
	</div>	
	<br>
	<br>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/live-data-search-with-multiselect-dropdown-using-ajax-php-mysql/">Back to Tutorial</a>		
	</div>	
</div>	
<script src="js/search.js"></script>
<?php include('footer.php');?>