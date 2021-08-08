<?php 
//// same as line 1116-1154 in index

if(isset($_POST['autoDisplayLocal']))
{
		date_default_timezone_set('US/Central');
		require_once('autoDisplayOrderListDB.php');
		$getorder = null;
		$getcurrentdate = null;
		$position = null;
		$emplogin = null;
		$position = $_POST['autoDisplayLocal'][1];
		$emplogin = $_POST['autoDisplayLocal'][0];
		
		$getorder = new autoDisplayOrderListDB();
		$getcurrentdate = date("Y-m-d");
		//$getcurrentdate = '2021-02-13';
		if($position == 'manager')
		{
			//echo $getcurrentdate;
			if($getorder->get_allTodayOrder($getcurrentdate)[0]['ordernumber'] != 0)
			{
				for($i = 0; $i < count($getorder->get_allTodayOrder($getcurrentdate)); $i++)
				{
					echo "<tr class = 'orderTR'>
						<td class = 'eachOrderNumber'>order #" .$getorder->get_allTodayOrder($getcurrentdate)[$i]['ordernumber']. "</td>
						<td class = 'eachOrderDescription'>" .$getorder->get_allTodayOrder($getcurrentdate)[$i]['listofitems']. "</td>
						<td class = 'eachOrderPaid'>paid</td>
						<td class = 'empordertime'>" .$getorder->get_allTodayOrder($getcurrentdate)[$i]['employeenameID']. " " .$getorder->get_allTodayOrder($getcurrentdate)[$i]['ordernumber']. " " .$getorder->get_allTodayOrder($getcurrentdate)[$i]['time']. "</td>
						</tr>";
				}
			}
		}
		else
		{
			if($getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)[0]['ordernumber'] != 0)
			{
				for($i = 0; $i < count($getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)); $i++)
				{
					echo "<tr class = 'orderTR'>
						<td class = 'eachOrderNumber'>order #" .$getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)[$i]['ordernumber']. "</td>
						<td class = 'eachOrderDescription'>" .$getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)[$i]['listofitems']. "</td>
						<td class = 'eachOrderPaid' style = 'display:none'>paid</td>
						<td class = 'empordertime'>" .$getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)[$i]['employeenameID']. " " .$getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)[$i]['ordernumber']. " " .$getorder->employee_getAllTodayOrder($getcurrentdate,$emplogin)[$i]['time']. "</td>
						</tr>";
				}
			}			
		}
		$getcurrentdate = null;
		$getorder = null;
		$position = null;
		$emplogin = null;
		
}



?>