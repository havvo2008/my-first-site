<?php
require_once('db.php');
class takeorderDB extends database
{
	private $curdate = null;
	private $curtime = null;
	private $empName = null;
	private $orderNumber = null;
	private $listOfItems = null;
	private $registerStatus = null;
	private $kitchenStatus = null;
	private $link = null;

	
	public function __construct($curdate,$curtime,$empName,$orderNumber,$listOfItems,$registerStatus,$kitchenStatus)
	{
		$this->link = parent::openDB();
		$this->curdate = $curdate;
		$this->curtime = $curtime;
		$this->empName = $empName;
		$this->orderNumber = $orderNumber;
		$this->listOfItems = $listOfItems;
		$this->registerStatus = $registerStatus;
		$this->kitchenStatus = $kitchenStatus;
		
		parent::__construct();
	}
	
	public function set_OrderNumber($orderNumber)
	{
		$this->orderNumber = $orderNumber;
	}
	public function set_listOfOrder($add_div)
	{
		$this->listOfItems = $this->listOfItems.$add_div;
	}
	public function insertNewOrder()
	{
		$sql = null; $stmt = null; $success = null; 
		$sql = "INSERT INTO ordertable (date,time, employeenameID,ordernumber,listofitems,register,kitchen) VALUES (?,?,?,?,?,?,?);";
		$stmt = parent::openDB()->prepare($sql);
		$stmt->bind_param("sssisss",  $this->curdate,$this->curtime, $this->empName,$this->orderNumber,$this->listOfItems,$this->registerStatus,$this->kitchenStatus);
		$success = $stmt->execute();
		$stmt->close();
		$sql = null;
		$stmt = null;
		if($success)
		{
			$success = null; 
			return true;
		}	
		else
		{
			$success = null;
			return false;
		}
	}
	public function countTodayOrder($todayDate)
	{
		$sql = null; $stmt = null;
		$sql = "SELECT * FROM ordertable WHERE date = ?";
		$stmt = parent::openDB()->prepare($sql);
		$stmt->bind_param("s",$todayDate);
		$stmt->execute();
		$result = $stmt->get_result();	
		$sql = null; $stmt = null;
		return $result->num_rows;
	}
	public function updateOrderByOrderNum($orderNumber)
	{
		if( $this->get_listOfItemsBy($orderNumber) == $this->listOfItems) return false;
		else{
		$sql = null; $stmt = null; $success = null; $this->listOfItems = $this->listOfItems . '<div>********</div>';
		$sql = "UPDATE ordertable SET listofitems = ?, kitchen = ? WHERE ordernumber = ? AND date = ?;";
		$stmt = parent::openDB()->prepare($sql);
		$stmt->bind_param("ssis", $this->listOfItems,$this->kitchenStatus, $orderNumber, $this->curdate);
		$success = $stmt->execute();
		$stmt->close();
		$sql = null;
		$stmt = null;	
		if($success)
		{
			$success = null; 
			return true;
		}	
		else
		{
			$success = null;
			return false;
		}
		}
		
	}	
	
	private function get_listOfItemsBy($orderNumber)
	{
		$sql = null;$statement = null;$row_count = null;
		//$sql = "SELECT listofitems FROM ordertable where ordernumber = ?" ;
		$sql = "SELECT listofitems FROM ordertable where ordernumber = ? AND date = ?;" ;
		$statement = $this->link->prepare($sql);
		$statement->bind_param('ss',$orderNumber,$this->curdate);
		$statement->bind_result($listofitems);
		$statement->execute();
		$statement->fetch();
		$statement->close(); 
		$sql = null;
		$statement = null;		
		return $listofitems;
	}
/*	
	public function get_allTodayOrder($todayDate)
	{
		$sql = null;$statement = null;$result = null;
		$sql = "SELECT * FROM ordertable where date = ?;";
		$statement = $this->link->prepare($sql);
		$statement->bind_param("s", $todayDate);
		$statement->execute();
		$result = $statement->get_result();
		if($result->num_rows === 0) exit('SELECT_DB_NO_ROW');
		$data = $result->fetch_assoc();
		$result->free();
		$statement->close(); 
		$sql = null;$statement = null;$result = null;
		return $data;	
	}
	public function test()
	{
	 return true;
	}
*/	
	public function __destruct()
	{
		$this->curdate = null;
		$this->curtime = null;
		$this->empName = null;
		$this->orderNumber = null;
		$this->listOfItems = null;
		$this->registerStatus = null;
		$this->kitchenStatus = null;
		$this->link->close(); 
		$this->link = null;
		parent::__destruct();
	}
}

?>