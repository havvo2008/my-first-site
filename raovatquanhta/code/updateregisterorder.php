<?php 
if(isset($_POST['updateOrder']))
{
	require_once('updateRegisterOrderDB.php');
	$update = null; $curdate = null; $orderNumber = null;
	$update = new updateRegisterOrderDB();
	
	$curdate = $_POST['updateOrder'][0];
	$orderNumber = $_POST['updateOrder'][1];;
	//echo $curdate. ' ' . $orderNumber;
	$update->updateRegister($curdate, $orderNumber);
	$update = null; $curdate = null; $orderNumber = null;
}
?>