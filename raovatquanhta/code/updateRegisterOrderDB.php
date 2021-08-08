<?php
require_once('db.php');
class updateRegisterOrderDB extends database
{
	private $link = null;

	public function __construct()
	{
		$this->link = parent::openDB();		
		parent::__construct();
	}
		
	public function updateRegister($todayDate, $ordernumber)	
	{
		$sql = null; $statement = null; 
		$sql = "UPDATE ordertable set register = 'paid' where date = ? and ordernumber = ?;";
		$statement = $this->link->prepare($sql);
		$statement->bind_param("si", $todayDate, $ordernumber );
		$statement->execute();
		$statement->close(); 
		$sql = null;$statement = null;	
	}
	
	public function __destruct()
	{
		$this->link->close(); 
		$this->link = null;
		parent::__destruct();
	}
}

?>