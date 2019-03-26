<?php
include_once("config.php");
$sql_query = "SELECT * FROM works";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$developer_records[] = $rows;
}
//print_r($developer_records);exit;
?>
<div class="container">
<h2>REPORT</h2>
<div class="well-sm col-sm-12">
<div class="btn-group pull-right">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
</form>
</div>
</div>
<table id="" class="table table-striped table-bordered">
<tr>
<th>Task</th>
<th>ProjectTitle</th>
<th>Description</th>
<th>StartTime</th>
<th>EndTime</th>
<th>Status</th>
</tr>
<tbody>
<?php foreach($developer_records as $developer) { ?>
<tr>
<td><?php echo $developer ['Task']; ?></td>
<td><?php echo $developer ['ProjectTitle']; ?></td>
<td><?php echo $developer ['Description']; ?></td>
<td><?php echo $developer ['StartTime']; ?></td>
<td><?php echo $developer ['EndTime']; ?></td>
<td><?php echo $developer ['Status']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php
if(isset($_POST["export_data"])) {
$filename = "phpzag_data_export_".date('Ymd') . ".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
$show_coloumn = false;
if(!empty($developer_records)) {
foreach($developer_records as $record) {
if(!$show_coloumn) {
// display field/column names in first row
echo implode("\t", array_keys($record)) . "\n";
$show_coloumn = true;
}
echo implode("\t", array_values($record)) . "\n";
}
}
exit;
}
?>
