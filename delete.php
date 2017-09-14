<!DOCTYPE html>
<html>
<head>
<title>Delete Data Using PHP- Demo Preview</title>
<meta content="noindex, nofollow" name="robot">
<link href="css/styledelete.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Delete Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
require_once("incs/connect.php");
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysqli_query($dbc, "delete from employee where employee_id=$del");
}
$query = mysqli_query($dbc,"select * from employee"); // SQL query to fetch data to display in menu.
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href=\"delete.php?id={$row['employee_id']}\">{$row['employee_name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysqli_query("select * from employee where employee_id=$id", $dbc);
while ($row1 = mysqli_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<span>Name:</span> <?php echo $row1['employee_name']; ?>
<span>E-mail:</span> <?php echo $row1['employee_email']; ?>
<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
<span>Address:</span> <?php echo $row1['employee_address']; ?><
<?php echo "<b><a href=\"delete.php?del={$row1['employee_id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?>
</form><?php
}
}
// Closing Connection with Server.
mysqli_close($dbc);
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</body>
</html>
