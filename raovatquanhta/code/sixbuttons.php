<?php
require_once('db.php');
class sixbuttons extends database
{
  //private $trackDB = [];
	private $trackDB = array();	//havo use this because php5.3 or less different with php 5.4 above
	public function __construct()
	{
		parent::__construct();
	}
	
	public function menubutton()
	{
		$sql = null; $retreiveData = null; $result = null;  $table_row = 1;
	    $sql = "select * from menubutton;";
		$result =  parent::openDB()->query($sql);
		while ( $table_row <= $result->num_rows)
		{	 
			$retreiveData = $result->fetch_assoc();
			if($table_row%2 == 1)
			echo "<tr>";
			echo
			"
			<td >
				<section class = 'menuItemBoxShadow' >
					<div class = 'menuItem' >
						<img  class = 'menuItemImg' src='$retreiveData[Image]'/>
						<ul class = 'menuItemTitleDescript'>
							<li>$retreiveData[Itemnumber] - $retreiveData[Title]</li>
							<li>$retreiveData[Description]</li>
						</ul>
					</div>";
					if($retreiveData['PriceSizeLarge'] == null)
					echo
					"<label style = 'font-size:14px'>one size - $retreiveData[PriceSizeSmall]</label>";
					else
					echo
					"<input type = 'radio' name = '$retreiveData[Title]' value = 'small - $retreiveData[PriceSizeSmall]'/><label for = 'small'>small - $retreiveData[PriceSizeSmall]</label>
					<input type = 'radio' name = '$retreiveData[Title]' value = 'large - $retreiveData[PriceSizeLarge]'/><label for = 'large'>large - $retreiveData[PriceSizeLarge]</label>";
			echo"		
				</section>
			</td>
			";
			if($table_row%2 == 0)
			echo "</tr>";
			
			$table_row++;
		}
		$result->free();
	}
	
	public function __destruct()
	{
		$this->trackDB = null;	
		parent::__destruct();
	}
}
?>