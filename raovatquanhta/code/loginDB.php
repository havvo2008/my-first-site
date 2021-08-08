<?php
require_once('db.php');
class loginDB extends database
{
	private $user = null;
	private $password = null;
	private $link = null; 
	
	public function __construct($user,$password)
	{
		$this->link = parent::openDB();
		$this->user = htmlspecialchars($user,ENT_QUOTES);
		$this->password = htmlspecialchars($password,ENT_QUOTES); 
		$this->user = $this->link->real_escape_string($this->user);
		$this->password = $this->link->real_escape_string($this->password);			
		parent::__construct();
	}
	/* keep this for reference
	public function get_password()
	{
		$sql = null;$statement = null;
		$sql = "SELECT password FROM members where employeenameID = ?";
		$statement = $this->link->prepare($sql);
		$statement->bind_param('s',$this->user);
		$statement->bind_result($password);
		$statement->execute();
		$statement->fetch();
		$statement->close(); 
		$sql = null;
		$statement = null;		
		return $password;
	}
	*/
	public function get_password_position()
	{
		$sql = null;$statement = null;$result = null;
		$sql = "SELECT password, position FROM members where employeenameID = ?";
		$statement = parent::openDB()->prepare($sql);
		$statement->bind_param("s", $this->user);
		$statement->execute();
		$result = $statement->get_result();
		if($result->num_rows === 0) return false;//exit('SELECT_DB_NO_ROW');
		$data = $result->fetch_assoc();
		$result->free();
		return $data;
	}	
	public function __destruct()
	{
		$this->user = null;
		$this->password = null;
		$this->link->close(); 
		$this->link = null;
		parent::__destruct();
	}
}

?>