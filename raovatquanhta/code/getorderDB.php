<?php
require_once('db.php');
class getorderDB extends database
{
	private $link = null;

	public function __construct()
	{
		$this->link = parent::openDB();		
		parent::__construct();
	}
		
	public function get_allTodayOrder($todayDate)	//manager get all employee order
	{
		$sql = null; $statement = null; $result = null; $data = null;
		$sql = "SELECT * FROM ordertable where date = ? and register = 'notpay';";
		$statement = $this->link->prepare($sql);
		$statement->bind_param("s", $todayDate );
		$statement->execute();
		$result = $statement->get_result();
		if($result->num_rows === 0) return 0;//exit('SELECT_DB_NO_ROW');
		$datas = array();
		for ($i = 0; $i < $result->num_rows; $i++)
		{
			$data = $result->fetch_assoc();
			$datas[] = $data;
		}
		$result->free();
		$statement->close(); 
		$sql = null;$statement = null;$result = null;
		return $datas;	
	}
	
	public function employee_getAllTodayOrder($todayDate, $emp)	// employee get all their order
	{
		$sql = null; $statement = null; $result = null; $data = null;
		$sql = "SELECT * FROM ordertable where date = ? and employeenameID = ? and register = 'notpay';";
		$statement = $this->link->prepare($sql);
		$statement->bind_param("ss", $todayDate, $emp );
		$statement->execute();
		$result = $statement->get_result();
		if($result->num_rows === 0) return 0;//exit('SELECT_DB_NO_ROW');
		$datas = array();
		for ($i = 0; $i < $result->num_rows; $i++)
		{
			$data = $result->fetch_assoc();
			$datas[] = $data;
		}
		$result->free();
		$statement->close(); 
		$sql = null;$statement = null;$result = null;
		return $datas;	
	}	
	public function __destruct()
	{
		$this->link->close(); 
		$this->link = null;
		parent::__destruct();
	}
}

?>