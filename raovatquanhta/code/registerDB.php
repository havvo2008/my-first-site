<?php
require_once('db.php');
class registerDB extends database
{
	private $user = null;
	private $password = null;
	private $accesscode = null;
	private $link = null; 
	
	public function __construct($user,$password,$accesscode)
	{
		$this->link = parent::openDB();
		$this->user = htmlspecialchars($user,ENT_QUOTES);
		$this->password = htmlspecialchars($password,ENT_QUOTES); 
		$this->accesscode = htmlspecialchars($accesscode,ENT_QUOTES);
		$this->user = $this->link->real_escape_string($this->user);
		$this->password = $this->link->real_escape_string($this->password);	
		$this->accesscode = $this->link->real_escape_string($this->accesscode);			
		parent::__construct();
	}
	
	public function checkForExitenceUser()
	{
		$sql = null;$statement = null;$row_count = null;
		$sql = "SELECT employeenameID FROM members where employeenameID = ?";
		$statement = $this->link->prepare($sql);
		$statement->bind_param('s',$this->user);
		$statement->execute();
		$row_count = $statement->fetch();
		$statement->close(); 
		$sql = null;
		$statement = null;		
		if($row_count)
		{
			$row_count = null;
			return true;
		}
		else
		{
			$row_count = null;
			return false;
		}
	
	}
	
	public function checkForAccessCode()
	{
		$sql = null;$statement = null;$row_count = null;
		$sql = "SELECT accesscode FROM members where accesscode = ?";
		$statement = $this->link->prepare($sql);
		$statement->bind_param('s',$this->accesscode);
		$statement->execute();
		$row_count = $statement->fetch();
		$statement->close(); 
		$sql = null;
		$statement = null;		
		if($row_count)
		{
			$row_count = null;
			return true;
		}
		else
		{
			$row_count = null;
			return false;
		}
	
	}
	public function insertNewMember()
	{
		$sql = null; $statement = null;  $success = null;
		$sql = "INSERT INTO members (employeenameID,password,position,accesscode) VALUES (?,?,'employee','no-accessCode')";
		$statement = $this->link->prepare($sql);
		$statement->bind_param('ss',$this->user,$this->password);
		$success = $statement->execute();
		//$row_count = $statement->fetch();
	
		if($success)
		{
			$statement->close(); 
			$sql = null;
			$statement = null;	
			$success = null;
			return true;
		}
		else
		{
			$statement->close(); 
			$sql = null;
			$statement = null;
			$success = null;
			return false;
		}	
	}
	
	
	public function __destruct()
	{
		$this->user = null;
		$this->password = null;
		$this->accesscode = null;
		$this->link->close(); 
		$this->link = null;
		parent::__destruct();
	}
}

?>