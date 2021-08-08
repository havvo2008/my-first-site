<?php 
if(isset($_POST['takeOrder']))
{
	require_once('takeorderDB.php');
	//include('takeorderDB.php');
	$curdate = null; $curtime = null; $orderNumber =  null; $empName = null; $listOfItems = null;
	$curdate = $_POST['takeOrder'][0];
	$curtime = $_POST['takeOrder'][1]; 
	$orderNumber =  $_POST['takeOrder'][2]; 
	$empName = $_POST['takeOrder'][3]; 
	$listOfItems = $_POST['takeOrder'][4];
	$takeorder = new takeorderDB($curdate,$curtime,$empName,$orderNumber,$listOfItems,'notpay','prepare');

	if($orderNumber == null || $orderNumber == '')
	{
		

		$takeorder->set_OrderNumber($takeorder->countTodayOrder($curdate)+1);
		$takeorder->set_listOfOrder('<div>********</div>');
		if($takeorder->insertNewOrder()== true)
			{echo "new ".$takeorder->countTodayOrder($curdate)." $curtime";}
		else
			echo "try to take order again";
	}
	else 
	{
		
		if($takeorder->updateOrderByOrderNum(substr($orderNumber,1)) == true)
			{echo "old ".substr($orderNumber,1)." $curtime";}
		else
			echo "try to take order again";
	}
	$takeorder = null;
$curdate = null; $curtime = null; $orderNumber =  null; $empName = null; $listOfItems = null;	


//require_once('takeorderDB.php');
//$takeorder = new takeorderDB('12:39:16','hai123',4,'some orders here','notpayyet','preparingfood');
//$takeorder->insertNewOrder();
//if( $takeorder->insertNewOrder() == true)
//	echo "true";
//else
//	echo "false";
//echo "print something";
//$today = null;
//echo date('Y-m-d H:i:s');
//echo $today;
//$today = null;
//$takeorder = null;
//require_once('db.php');
//$db = new database();
//$db->openDB();
//$db->closeDB();
//$db = null;

}
?>