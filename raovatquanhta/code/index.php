
<!DOCTYPE html>
<html>

<head>
<title>Page Title</title>
<style>

.htmlLoginCover {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
     /* Sit on top z-index:-1; */
	padding:0;
    margin:auto;
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
   /* background-image: url("http://raovatquanhta.com/thapef.jpg"); */
	background-size: cover;
	/* background-color: rgb(0,0,0); Fallback color */
}
.htmlLoginForm, .htmlRegisterForm
{
	position: fixed;
    height: auto; 
	width: auto;
	margin:auto;
	border: 3px solid lightgray;
	padding:10px;
	top:25%;
	left:40%;
	/*background-image: url("http://raovatquanhta.com/app-busineseV1/image/paper.png");*/
	background-color: lightgray;
	
}
.overlay {

    height: 70px;
    width: 0px;
    position: fixed;/* Stay in place */
    z-index: 5; /* Sit on top */
    left: 0;
    top: 50;
    background-color: rgb(0,0,0); /* Black fallback color */
    background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
    overflow: hidden; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}
.signout, .shutdown{
	color: white;
    width: 100%;
	vertical-align: middle;
	text-align: center;
	line-height: 40px;
}
.signoutDiv, .shutdownDiv, .takeOrderDiv, .printOrderTicketDiv, .clearOrderTicketDiv, .selectSize, .clearPaidDiv, .newOrder, .errorPrintOrderTicketDiv
{
	position: fixed;
	left: 40%;
	top: 40%;
    background-color: rgba(0,0,0, 0.7); /* Black w/opacity */	
	z-index: 6;
	color: white;
	height:auto;
	width:10%;
	text-align: center;
}
.signoutDiv, .shutdownDiv, .takeOrderDiv, .printOrderTicketDiv, .clearOrderTicketDiv, .selectSize, .clearPaidDiv, .newOrder, .errorPrintOrderTicketDiv
{
	display:none;
}

.yes
{
	background-color: blue;
	height:30px;
}
.no
{	
	background-color: red;
	height:30px;
}

.menu_signin{
width: 50px;
}
</style>

<style>
/* key border style */
::selection{background-color:none; color:inherit;}

.cable{height:100px; width:10px; background-color:#000; margin:0 60%;}
.keyboard{
  width:800px; height: 320px;
  background-color: #111;
  margin: 0px auto;
  border-radius: 9px;
  padding: 30px;
  color: #eee;
}

.logo{
  width:40px; height:40px;
  background-color:#CCC;
  color: #222;
  font-weight:300;
  font-style: oblique;
  font-size:30px;
  line-height:40px;
  text-align:center;
  margin: -20px auto 10px auto;
  border-radius:40px;
}


.lights{
  float:right;
  position:relative;
  top:-45px;
  right:8px;
  padding:0;
  margni:0;
}
.lights span{margin:0 20px 0 20px; padding:0; text-align: center;}
.lights span:after{
  content:"";
  width:11px; height:8px;
  top: 22px; margin-left:-9px;
  background-color:#DBB921;
  position:absolute;
  border-radius: 3px;
}

.keyboard_key{
  width: 40px; height:40px;
  display:block;
  background-color:#333;
  text-align: left;
  padding-left: 8px;
  line-height: 29px;
  border-radius:2px;
  float:left; margin-left: 2px;
  margin-bottom:2px;
  cursor: pointer;
  transition: box-shadow 0.7s ease;
}

.section-a{width:650px; height:260px; float:left;}
.section-b{width:150px; height:260px; float:left;}

.function{font-size: 12px; width:30px; height:30px; margin-bottom:15px;}
.small{font-size:10px; line-height:13px; text-align: center; padding:0 5px; padding-top:2px; height:28px !important;}
.space1{margin-right: 43px !important;}
.space2{margin-right: 25px !important;}
.dual {font-size: 14px; line-height: 20px; width:30px; }
.backspace {width:84px; font-size: 12px;}
.tab {width: 50px; line-height: 40px; font-size:13px;}
.letter{width:30px;}
.slash{width:64px;}
.caps{width:70px; font-size:12px; line-height:18px;}
.enter{width:92px; line-height:40px; text-align: center; padding-left:0;}
.shift.shift_left{width: 90px;line-height: 40px; font-size:13px;}
.shift.shift_right{width: 104px;line-height: 40px; font-size:13px;}
.ctrl{width: 50px; line-height: 40px; font-size:13px;}
.space{width:234px;}
.arrows{position:relative; top:42px;}
.sec-func .keyboard_key{width: 32px; font-size:10px; text-align:left; line-height:40px; float:left;}
.sec-func div.dual{line-height:20px;}
.arrows .keyboard_key{text-align: center; padding-left: 7px; margin-left:2px;}
.hidden{visibility: hidden;}

.keyboard_key:hover{box-shadow:0px 0px 10px #14B524; z-index:1000;}
.key:active{
background-color: green;
}
</style>

<style>
html, body {
    height: 90%;    margin: 0px;
font-family: "Times New Roman", Times, serif;
font-size: 24px;
padding:10px;
}

.keyboard{
	display: none;
	z-index: 9;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	cursor: grab;
}

.keyboard_close{
	float:right;
	
}
.keyboard_close:hover{
	cursor:pointer;
	color:red;
}

.move{
	height:30px;
    padding: 5px;
    background-color: #2196F3;
	background-color:white;
    color: black;
}

.modal {
    /*display: block;  Hidden by default */
	display: block;
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
	padding:0;
    margin:auto;
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */

}
.time {
	display: block; /* Hidden by default */
    position: relative; /* Stay in place */
	padding:0;
    margin:0;
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 45px; /* Full height */
	background-color: red;
	 
}
button{
	height:100%;
	width:100%;
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
}
button:active{
background-color: green;
}
.menubutton, .orderbutton, .calculatorbutton
{
	background-color: #e7e7e7;
}
h1 {
    font-size: 30px;
    height:15px;
}
table {
    border-collapse: collapse;
    border: 2px solid lightgray;
 
} 
th,td {
    border: 0px solid lightgray;
	padding:1px;
	vertical-align: center  ;
	height: 50px;
}
table.Menu_Orders_Calculator{
	table-layout: fixed;
    width: 100%; 
	font-size:30px;
	background-color:white;
	line-height: 30px;
}

table.calculator {
	table-layout: fixed;
    width: 100%; 
	font-size:30px;
	background-color:white;
	line-height: 30px;
	display:none;
} 
table.menu {
	table-layout: fixed;
    width: 95%;
	font-size:30px;
	background-color:none;
	display:none;
	margin-left:auto;
	margin-right:auto;
	border:none;
} 
table.menu tr
{
	width:auto;height:230px;
}

table.order {
	table-layout: fixed;
    width: 95%;
	font-size:30px;
	background-color:white;
	margin-left:auto;
	margin-right:auto;
	display:none;
} 
table.order td
{
	border: dashed #1c87c9;
}

table.order td:nth-of-type(2), table.order  td:nth-of-type(4)
{
	display:none;
}

.menuItemBoxShadow{background-color: #f1f1f1;width:95%;height:auto;box-shadow: 5px 5px 5px #888888;}
.menuItem{width:100%;height:180px;}
.menuItem:active{background-color:green;}
.menuItemImg{
	display:inline-block;
	position:relative;
	width:100%; 
	height:100px;
 }
.menuItemTitleDescript
{
	position:relative;
	padding-left:5px;
	padding-right:5px;
}
ul{
	list-style-type:none;
	margin:0;
	padding:0;
	font-size:15px;
}
li:first-child{
	font-weight:bold;
	font-size:17px;
}
label{font-size:12px;}


table.b {
    table-layout: fixed;
    width: 100%;    
}
.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
}
.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}

.left{
	display: block; /* Hidden by default */
    position: relative; /* Stay in place */
	padding:0;
    margin:0;
    left: 0;
    top: 0;
	float:left;
    width: 50%; /* Full width */
    height: 92%; /* Full height */
	background-color: orange;
	overflow-y: auto;
}
.carryout{
	padding-bottom: 25px;
}
#Ctracknum{}
.items{
	width:90%;
	height:49%;
	overflow-y: auto;
	margin-left: auto;
    margin-right: auto;
}
.orderTicket{
	width:90%;
	margin-left: auto;
    margin-right: auto;
}
.righttop{
	display: block; /* Hidden by default */
    position: relative; /* Stay in place */
	padding:0;
    margin:0;
    right: 0;
    top: 0;
	float:left;
    width: 50%; /* Full width */

	background-color: yellow;
}
.rightbottom{
	display: block; /* Hidden by default */
    position: relative; /* Stay in place */
	padding:0;
    margin:0;
    right: 0;
    top: 0;
	float:left;
    width: 50%; /* Full width */
    height: 84%; /* Full height */
	background-color: blue;
	overflow-y: auto;
	
}

.RBlist{
	display:inline-block;
	height:50px;
	width:100%;
	background: #CCC;
}


.RBpaid
{
	width:45%;
	text-align:center;
	float:right;
	vertical-align: middle;
	border: dashed #1c87c9;
	margin: auto;
	padding: 10px;
}
.RBpaid:active
{
background-color:green;
}
.RBorder:active
{
background-color:green;
}
.RBorder
{
	width:46%;

	text-align:center;
	float:left;
	vertical-align: middle;
	border: dashed #1c87c9;
	margin: auto;
	padding: 10px;
}

.item{
}
.item_number{
	vertical-align: top;
	display:inline-block;
	width:40px;
	text-align: right;
}
.item_description{
	display:inline-block;
	width:70%;
	padding-left: 15px;
	padding-right: 15px;
}
.done{
display:none;
}
.void{
	vertical-align: top;
	width:25px;
	display:inline-block;
	padding-left: 45px;
}

.priceT{
	vertical-align: top;
	width:10px;
	display:inline-block;
}

.AddNoteOrVoid{
	z-index:3;
	background-color:blue;
	position: fixed;
	top: 100px;
	left: 50px;
	display:none;
}

#transaction{
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}

@media print {
  .time, .righttop, .rightbottom, .printticket, .overlay {
  display: none;
  }
       body {
			margin: 0 auto;
	   }
	.left{
    width: 100%; /* Full width */
    height: 100%; /* Full height */
	}
  }
@page {
  margin: 0 auto;
}

</style>
<script>
function loginError(errorMessage,HTMLid)
{
var oOutput = document.getElementById(HTMLid);
oOutput.style.fontSize = '16px';
oOutput.innerHTML = errorMessage;
}

</script>
</head>
<body>

<form  method = "post">
	<div class = 'htmlLoginCover' id = 'htmlLoginCover' style = 'display:block'>
		<div class = 'htmlLoginForm' style = 'display:block'>
			EmployeeID  &nbsp;   <input type="text" name="emplogin" id="emplogin" class="emplogin" style = 'float:right'><br>
			Password <input type="password" name="loginpassword" id="loginpassword" class="loginpassword"  style = 'float:right'><br>
			<input type="submit" value="login" name = "submit"><a class = 'register' style = 'float:right;font-size: 16px; color:blue' >register</a><br>
			<a id = 'HTMLloginError' style = 'color:red'></a>
		</div>
		<div class = 'htmlRegisterForm' style = '<?php if( isset($_POST['submit']) && $_POST['submit'] == 'register') echo "display:block"; else echo "display:none";?>'>
			EmployeeID  &nbsp;   <input type="text" name="empregister" id="empregister" class="empregister" value = '<?php if( (isset($_POST['empregister']) &&  strlen($_POST['empregister']) > 0)) echo $_POST['empregister'];?>' style = 'float:right'><br>
			Password <input type="password" name="registerpassword" id="registerpassword" class="registerpassword"  value = '<?php if( (isset($_POST['registerpassword']) &&  strlen($_POST['registerpassword']) > 0)) echo $_POST['registerpassword'];?>' style = 'float:right'><br>
			Re-Password <input type="password" name="Re_registerpassword" id="Re_registerpassword" class="Re_registerpassword" value = '<?php if( (isset($_POST['Re_registerpassword']) &&  strlen($_POST['Re_registerpassword']) > 0)) echo $_POST['Re_registerpassword'];?>' style = 'float:right'><br>
			Access Code <input type="password" name="AccessCode" id="AccessCode" class="AccessCode" value = '<?php if( (isset($_POST['AccessCode']) &&  strlen($_POST['AccessCode']) > 0)) echo $_POST['AccessCode'];?>' style = 'float:right'><br>
			<input type="submit" value="register" name = "submit" ><a class = 'login' style = 'float:right;font-size: 16px; color:blue' >login</a><br>
			<a id = 'HTMLRegisterError' style = 'color:red'></a>
		</div>
	</div>
</form>

<?php
date_default_timezone_set('US/Central');
$correctPassword = false;
$position = null;

if(isset($_POST['submit']) && $_POST['submit'] == 'login')
{
	if( (isset($_POST['emplogin']) &&  strlen($_POST['emplogin']) == 0) ||
		(isset($_POST['loginpassword']) &&  strlen($_POST['loginpassword']) == 0))
	{
		echo "<script>loginError('fill out from', 'HTMLloginError')</script>";
	}
	else
	{
		require_once('loginDB.php');
		$login = new loginDB($_POST['emplogin'],$_POST['loginpassword']);
		$legin_Elm = (array)$login->get_password_position();
		//var_dump($legin_Elm['password']);
		//if( $login->get_password_position()['password'] == $_POST['loginpassword'])
		if (!isset($legin_Elm['password'])) 
		{
			echo "<script>loginError('incorrect employeeID/password', 'HTMLloginError')</script>";
			exit;
		}
		if( $legin_Elm['password'] == $_POST['loginpassword']) //ha add this because php version 5.3.13 or less is different 5.4 above
		{
			$correctPassword = true;
			//$position = $login->get_password_position()['position'];
			$position = $legin_Elm['position'];  //ha add this
			//echo "<script>loginError('".$login->get_password()."', 'HTMLloginError')</script>";
			
		}
		else{
			echo "<script>loginError('incorrect employeeID/password', 'HTMLloginError')</script>";
			//var_dump($login->get_password_position());
			//$ele =  (array)$login->get_password_position();
			//echo $ele['password'];
			//print $login->get_password_position()['password'];
			}
		$legin_Elm = null;
		$login = null;
		
	}
	
}
if( isset($_POST['submit']) && $_POST['submit'] == 'register')
{
	if( (isset($_POST['empregister']) &&  strlen($_POST['empregister']) == 0) ||
		(isset($_POST['registerpassword']) &&  strlen($_POST['registerpassword']) == 0) ||
		(isset($_POST['Re_registerpassword']) &&  strlen($_POST['Re_registerpassword']) == 0) || 
		(isset($_POST['AccessCode']) &&  strlen($_POST['AccessCode']) == 0))
	{
		echo "<script>loginError('fill out form', 'HTMLRegisterError')</script>";
	}
	else
	{
		require_once('registerDB.php');
		$registerDB = null; $checkForExitenceUser = true; $checkForPasswordMatch = true; $checkForAccessCode = true;
		$registerDB = new registerDB($_POST['empregister'],$_POST['registerpassword'],$_POST['AccessCode']);
		if( $registerDB->checkForExitenceUser() == true) 
			{echo "<script>loginError('exitence user', 'HTMLRegisterError')</script>";$checkForExitenceUser = false;}
		if( $_POST['registerpassword'] !=  $_POST['Re_registerpassword'])
			{echo "<script>loginError('password not match', 'HTMLRegisterError')</script>";$checkForPasswordMatch = false;}
		if( $registerDB->checkForAccessCode() != true)
			{echo "<script>loginError('incorrect access code', 'HTMLRegisterError')</script>";$checkForAccessCode = false;}
		if( $checkForExitenceUser == true && $checkForPasswordMatch == true && $checkForAccessCode == true )
		{
			if($registerDB->insertNewMember() == true)echo "<script>loginError('register done', 'HTMLRegisterError')</script>";
			else echo "<script>loginError('try register again', 'HTMLRegisterError')</script>";
		}
		//$_POST['empregister'] = null; $_POST['registerpassword'] = null; $_POST['AccessCode'] = null;
		$registerDB = null;$checkForExitenceUser = null; $checkForPasswordMatch = null; $checkForAccessCode = null;
	}
}

if($correctPassword)
{


?>
<div id = 'keyboard' class = 'keyboard' ><span id = 'keyboard_close' class = 'keyboard_close key'>X</span></br>
	<div id = 'move' class = 'move' ><span class = "key_screen" ></span></div>
	<table class="table_keyboard">
		<tr>
			<!--th align="right" colspan="4" class = "key_screen" style = "background-color:white">  
			</th-->
			<!--div id = 'key_screen' class = 'key_screen' style = "background-color:white;width:100%;height:0px"></div-->
		</tr>
		<tr>
  <div class="section-a">
  <div class="keyboard_key function space1">
    Esc
  </div>

  <div class="keyboard_key function">
    F1
  </div>
  <div class="keyboard_key function">
    F2
  </div>
  <div class="keyboard_key function">
    F3
  </div>
  
  <div class="keyboard_key function space2">
    F4
  </div>
  <div class="keyboard_key function">
    F5
  </div>
  <div class="keyboard_key function">
    F6
  </div>
    <div class="keyboard_key function">
    F7
  </div>
  <div class="keyboard_key function space2">
    F8
  </div>
  
  <div class="keyboard_key function">
    F9
  </div>
  <div class="keyboard_key function">
    F10
  </div>
    <div class="keyboard_key function">
    F11
  </div>
  <div class="keyboard_key function">
    F12
  </div>
    <!--END FUNCTION keyboard_keyS -->
    
  <div class="keyboard_key num dual">
    ~<br>`
  </div>
    
  <div class="keyboard_key num dual key">
    !<br>1
  </div>
  <div class="keyboard_key num dual key">
    @<br>2
  </div>
  <div class="keyboard_key num dual key">
    #<br>3
  </div>
  <div class="keyboard_key num dual key">
    $<br>4
  </div>
  <div class="keyboard_key num dual key">
    %<br>5
  </div>
  <div class="keyboard_key num dual key">
    ^<br>6
  </div>
  <div class="keyboard_key num dual key">
    &<br>7
  </div>
  <div class="keyboard_key num dual key">
    *<br>8
  </div>
  <div class="keyboard_key num dual key">
    (<br>9
  </div>
  <div class="keyboard_key num dual key">
    )<br>0
  </div>
  <div class="keyboard_key num dual">
    _<br>-
  </div>
  <div class="keyboard_key num dual">
    +<br>=
  </div>
  <div class="keyboard_key backspace key">
      Backspace
  </div>
   <!--END NUMBER keyboard_keyS -->
    
  <div class="keyboard_key tab">
    Tab
  </div>
  
  <div class="keyboard_key letter key">
    Q
  </div>
    <div class="keyboard_key letter key">
    W
  </div>
    <div class="keyboard_key letter key">
    E
  </div>
    <div class="keyboard_key letter key">
    R
  </div>
    <div class="keyboard_key letter key">
    T
  </div>
    <div class="keyboard_key letter key">
    Y
  </div>
    <div class="keyboard_key letter key">
    U
  </div>
    <div class="keyboard_key letter key">
    I
  </div>
    <div class="keyboard_key letter key">
    O
  </div>
    <div class="keyboard_key letter key">
    P
  </div>
    <div class="keyboard_key dual">
    {<Br>[
  </div>
    <div class="keyboard_key dual">
    }<br>]
  </div>
    <div class="keyboard_key letter dual slash">
    |<br>\
  </div>
  <div class="keyboard_key caps">
    Caps<br>Lock
    </div>
  <div class="keyboard_key letter key">
    A
  </div>
    <div class="keyboard_key letter key">
    S
  </div>
    <div class="keyboard_key letter key">
    D
  </div>
    <div class="keyboard_key letter key">
    F
  </div>
    <div class="keyboard_key letter key">
    G
  </div>
    <div class="keyboard_key letter key">
    H
  </div>
    <div class="keyboard_key letter key">
    J
  </div>
    <div class="keyboard_key letter key">
    K
  </div>
    <div class="keyboard_key letter key">
    L
  </div>
    <div class="keyboard_key dual">
    :<br>;
  </div>
    <div class="keyboard_key dual">
    "<br>'
  </div>
    <div class="keyboard_key enter key">
    Enter
  </div>
    
  <div class="keyboard_key shift shift_left">
    Shift
  </div>
  <div class="keyboard_key letter key">
    Z
  </div>  
    <div class="keyboard_key letter key">
    X
  </div>
    <div class="keyboard_key letter key">
    C
  </div>
    <div class="keyboard_key letter key">
    V
  </div><div class="keyboard_key letter key">
    B
  </div><div class="keyboard_key letter key">
    N
  </div><div class="keyboard_key letter key">
    M
  </div>
    <div class="keyboard_key dual">
    < <br>,
  </div>
    <div class="keyboard_key dual">
    ><br>.
  </div>
    <div class="keyboard_key dual">
    ?<br>/
  </div>
    <div class="keyboard_key shift shift_right">
    Shift
  </div>
  <div class="keyboard_key ctrl">
    Ctrl
  </div>
    <div class="keyboard_key">
    &hearts;
  </div>
    <div class="keyboard_key">
    Alt
  </div>
    <div class="keyboard_key space key">
    </div>
    <div class="keyboard_key">
    Alt
  </div>
    <div class="keyboard_key">
    &hearts;
  </div>
    <div class="keyboard_key">
    Prnt
  </div>
    <div class="keyboard_key ctrl">
    Ctrl
  </div>
  </div><!-- end section-a-->
  
  <div class="section-b">
    <div class="keyboard_key function small">
      Prnt Scrn
    </div>
    <div class="keyboard_key function small">
      Scroll Lock
    </div>
    <div class="keyboard_key function small">
      Pause Break
    </div>
    
    <dic class="sec-func">
    <div class="keyboard_key">
      Insert
    </div>
    <div class="keyboard_key">
      Home
    </div>
    <div class="keyboard_key dual">
      Page Up
    </div>
    <div class="keyboard_key">
      Del
    </div>
    <div class="keyboard_key">
      End
    </div>
      <div class="keyboard_key dual">
      Page Down
    </div>
      
      <div class="arrows">
    <div class="keyboard_key hidden">
      
    </div>
    <div class="keyboard_key">
      ^
    </div>
    <div class="keyboard_key hidden">
      
    </div>
    <div class="keyboard_key">
      <
    </div>
    <div class="keyboard_key">
      v
    </div>
      <div class="keyboard_key">
      >
    </div>
      </div><!-- end arrows -->
    </div><!-- end sec-func -->
    
    
  </div><!-- end section-b-->
  </div>
		</tr>
	</table>
</div>



<div id="myModal" class="modal">
  <div class =  'time'> 
	<table class="b">
		<tr>
			<th align="left" class = 'menu_signin toggle' id = 'menu_signin'>  
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</th>
			<th align="center"><span class = 'my_time'></span></th>
		</tr>
	</table>
  </div>
    	<div  class="overlay">
			<a class = 'signout' >signout</a>
			<a class = 'shutdown' >shutdown</a>
		</div>
		<div class = "signoutDiv">sign out?<br>
			<div class = 'yes signoutDiv_yes'>yes</div><div class = 'no signoutDiv_no'>no</div>
		</div>
		<div class = "shutdownDiv">shut down?<br>
			<div class = 'yes shutdownDiv_yes'>yes</div><div class = 'no shutdownDiv_no'>no</div>
		</div>
		<div class = "takeOrderDiv">Take Order?<br>
			<div class = 'yes takeOrderDiv_yes'>yes</div><div class = 'no takeOrderDiv_no'>no</div>
		</div>
		<div class = "printOrderTicketDiv">Print Order Ticket?<br>
			<div class = 'yes printOrderTicketDiv_yes'>yes</div><div class = 'no printOrderTicketDiv_no'>no</div>
		</div>
		<div class = "errorPrintOrderTicketDiv">Must have order ticket number<br>
			<div class = 'errorPrintOrderTicketOK'>OK</div>
		</div>		
		<div class = "clearOrderTicketDiv">Clear Order Ticket?<br>
			<div class = 'yes clearOrderTicketDiv_yes'>yes</div><div class = 'no clearOrderTicketDiv_no'>no</div>
		</div>	
		<div class = "selectSize">Select Size?<br>
			<div class = 'selectSizeOK'>OK</div>
		</div>	
		<div class = "newOrder">New order #<br>
			<div class = 'newOrderOK'>OK</div>
		</div>	
		
		<div class = "clearPaidDiv"><a>Paid</a><br>
			<div class = 'yes clearPaidDiv_yes'>yes</div><div class = 'no clearPaidDiv_no'>no</div>
		</div>		
  <div class = "left">
	<div class = 'carryout' >
		<div align="center"><h1 >Order Ticket <a id = 'Cordernumber' class = 'Cordernumber'></a> </h1></div>
		<div align="center">| Tel: <a id = 'Ctel' class = 'Ctel'></a> | 
							Store: <a id = 'Cbranch' class = 'Cbranch'></a> | 
							Date: <a id = 'Cdate' class = 'Cdate'></a> | </br>
							|Time:<a id = 'Ctime' class = 'Ctime' ></a>
							| Employee: <a id = 'Cemp' class = 'Cemp' ></a> |
							<a id = 'CempRank' class = 'CempRank' style = 'display:inline-block'></a>
							</div>
	</div>
	
	<section class = 'items' id = 'items'>
	</section>
	
	<div id="AddNoteOrVoid" class="AddNoteOrVoid" >
		<span id = 'itemspan'></span></br>
		<button id = 'addnotebutton' class = 'addnotebutton'>note</button>
		<button id = 'voidbutton' class = 'voidbutton'>void</button>
		<button id = 'closebutton' class="closebutton" >close</button>
	</div>
	
	<div class = 'orderTicket'>
	<table style = "width:100%;border-style: none; border-top: 1px dotted blue;" >
		<tr >
			<td align="right" style = "height:2px">SubTotal </td>
			<td align="right" style = "height:2px" id = 'subtotal'>0.00 </td>
		</tr>
		<tr style = "height:0px">
			<td align="right" style = "height:2px">Tax</td>
			<td align="right" style = "height:2px" id = 'tax'>0.00 </td>
		</tr>
		<tr>
			<td align="right" style = "height:2px;font-weight: bold;">Total</td>
			<td align="right" style = "height:2px;font-weight: bold;" id = 'total'>0.00 </td>
		</tr>

	</table>
	</div>
	
	<table class = 'printticket' style = "width:100%">
		<tr>
			<td><button class = 'takeorderbutton'>Take Order</button> </td>
			<td><button class = 'printorderbutton'>Print Order Ticket</button> </td>
			<td><button class = 'clearorderbutton'>Clear Order Ticket</button> </td>
		</tr>
	</table>
  </div>
  <div class = "righttop">
	<table class="Menu_Orders_Calculator">
		<tr>
			<td ><button class = "menubutton">MENU</button></td>
			<td ><button class = "orderbutton">ORDERS</button></td>
			<td ><button class = "calculatorbutton">CACULATOR</button></td>
		</tr>
	</table>
  </div>
  <div class = "rightbottom" id = "rightbottom"></br>
	<table class="calculator">
		<tr>
			<th align="right" colspan="4" class = "cal_screen">  
			</th>
		</tr>
		<tr>
			<td ><button class = "calBtn" value = '<<'>back</button></td>
			<td ><button class = "calBtn" value = 'clear'>clear</button></td>
			<td ><button class = "calBtn" value = '#' disabled ></button></td>
			<td><button class="calBtn" value = '*'>*</button></td>
		</tr>
		<tr>
			<td><button class = "calBtn" value = '7'>7</button></td>
			<td><button class = "calBtn" value = '8'>8</button></td>
			<td><button class = "calBtn" value = '9'>9</button></td>
			<td><button class = "calBtn" value = '/'>/</button></td>
		</tr>
		<tr>
			<td><button class = "calBtn" value = '4'>4</button></td>
			<td><button class = "calBtn" value = '5'>5</button></td>
			<td><button class = "calBtn" value = '6'>6</button></td>
			<td><button class = "calBtn" value = '+'>+</button></td> 
		</tr>
		<tr>
			<td><button class = "calBtn" value = '1'>1</button></td>
			<td><button class = "calBtn" value = '2'>2</button></td>
			<td><button class = "calBtn" value = '3'>3</button></td>
			<td><button class = "calBtn" value = '-'>-</button></td>
		</tr>
		<tr>
			<td colspan="2"><button class = "calBtn" value = '0'>0</button></td>

			<td><button class = "calBtn" value = '.'>.</button></td>
			<td><button class = "calBtn" value = '='>=</button></td>
		</tr>
	</table>  
	
	<table class="menu">
		<!--tr>
			<td >
				<section class = "menuItemBoxShadow" >
					<div class = "menuItem" >
						<img  class = 'menuItemImg' src='./image/tentiem/no_image.png'/>
						<ul class = 'menuItemTitleDescript'>
							<li>#1 - Pho Tai</li>
							<li>Descriptions here fkelj skjfl jfljflkjlf lkjlfsjdlfkjslfl fj ls flkjsfl ksjflkj slfj lskf l;sf</li>
						</ul>
					</div>
					<input type = "radio" name = "photai" value = "small-5.99"/><label for = "small">small-5.99</label>
					<input type = "radio" name = "photai" value = "large-6.99"/><label for = "large">large-6.99</label>
				</section>
			</td>
			<td >
				<section class = "menuItemBoxShadow" >
					<div class = "menuItem" >
						<img  class = 'menuItemImg' src='./image/tentiem/no_image.png'/>
						<ul class = 'menuItemTitleDescript'>
							<li>#2 - Pho Tai Nam</li>
							<li>Descriptions here fkelj skjfl jfljflkjlf lkjlfsjdlfkjslfl fj ls flkjsfl ksjflkj slfj lskf l;sf</li>
						</ul>
					</div>
					<input type = "radio" name = "photai1" value = "small-7.99"/><label for = "small">small-7.99</label>
					<input type = "radio" name = "photai1" value = "large-9.99"/><label for = "large">large-9.99</label>
				</section>
			</td>			
		</tr>
		<tr>
			<td >
				<section class = "menuItemBoxShadow" >
					<div class = "menuItem" >
						<img  class = 'menuItemImg' src='./image/tentiem/no_image.png'/>
						<ul class = 'menuItemTitleDescript'>
							<li>#3 - Com Tam</li>
							<li>Descriptions here fkelj skjfl jfljflkjlf lkjlfsjdlfkjslfl fj ls flkjsfl ksjflkj slfj lskf l;sf</li>
						</ul>
					</div>
					<label style = "font-size:14px">one size - 10.99</label>
				</section>
			</td>			
		</tr -->
<?php
require_once('sixbuttons.php');
$sixbuttons = new sixbuttons();
$sixbuttons->menubutton();
$sixbuttons = null;
?>	
	</table>  	
	
	<table class = 'order'>
		<tr class = 'orderTR'>			
		</tr>		
		<?php
		
		require_once('getorderDB.php');
		$getorder = null;
		$getcurrentdate = null;
		$getorder = new getorderDB();
		$getcurrentdate = date("Y-m-d");
		//$getcurrentdate = '2021-02-13';
		if($position == 'manager')
		{
			//echo $getcurrentdate;
		/*	if($getorder->get_allTodayOrder($getcurrentdate)[0]['ordernumber'] != 0)  
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
			*/
			$get_allTodayOrder_elm = (array) $getorder->get_allTodayOrder($getcurrentdate);
			if($get_allTodayOrder_elm[0]['ordernumber'] != 0)  
			{
				for($i = 0; $i < count($get_allTodayOrder_elm); $i++)
				{
					echo "<tr class = 'orderTR'>
						<td class = 'eachOrderNumber'>order #" .$get_allTodayOrder_elm[$i]['ordernumber']. "</td>
						<td class = 'eachOrderDescription'>" .$get_allTodayOrder_elm[$i]['listofitems']. "</td>
						<td class = 'eachOrderPaid'>paid</td>
						<td class = 'empordertime'>" .$get_allTodayOrder_elm[$i]['employeenameID']. " " .$get_allTodayOrder_elm[$i]['ordernumber']. " " .$get_allTodayOrder_elm[$i]['time']. "</td>
						</tr>";
				}
				
			}
			$get_allTodayOrder_elm = null;
		}
		else
		{/*
			if($getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])[0]['ordernumber'] != 0)
			{
				for($i = 0; $i < count($getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])); $i++)
				{
					echo "<tr class = 'orderTR'>
						<td class = 'eachOrderNumber'>order #" .$getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])[$i]['ordernumber']. "</td>
						<td class = 'eachOrderDescription'>" .$getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])[$i]['listofitems']. "</td>
						<td class = 'eachOrderPaid' style = 'display:none'>paid</td>
						<td class = 'empordertime'>" .$getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])[$i]['employeenameID']. " " .$getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])[$i]['ordernumber']. " " .$getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin'])[$i]['time']. "</td>
						</tr>";
				}
			}
				*/
			$employee_getAllTodayOrder_elm = (array) $getorder->employee_getAllTodayOrder($getcurrentdate,$_POST['emplogin']);
			if($employee_getAllTodayOrder_elm[0]['ordernumber'] != 0)
			{
				for($i = 0; $i < count($employee_getAllTodayOrder_elm); $i++)
				{
					echo "<tr class = 'orderTR'>
						<td class = 'eachOrderNumber'>order #" .$employee_getAllTodayOrder_elm[$i]['ordernumber']. "</td>
						<td class = 'eachOrderDescription'>" .$employee_getAllTodayOrder_elm[$i]['listofitems']. "</td>
						<td class = 'eachOrderPaid' style = 'display:none'>paid</td>
						<td class = 'empordertime'>" .$employee_getAllTodayOrder_elm[$i]['employeenameID']. " " .$employee_getAllTodayOrder_elm[$i]['ordernumber']. " " .$employee_getAllTodayOrder_elm[$i]['time']. "</td>
						</tr>";
				}
			}
		}
		$getcurrentdate = null;
		$getorder = null;
		?>
	</table>
  </div>  
</div>   

<script>


	function myClock()
	{

		var my_time = document.getElementsByClassName("my_time")[0]; 
		function clock()
		{
			var d = new Date();
			var t = d.toLocaleTimeString();
			my_time.innerHTML = t;
		}
		this.runClock = function () {
			setInterval(clock,1000);
		}
/*  keep for reference
		function stopTime()
		{
			clearInterval(myVar);
		}
*/	
	
	}

/* keep class Car for reference
class Car{
	constructor(brand){
		this.carname = brand;
	}
	static hello(){return 'hello';}
}
Car for reference*/




function menu_bar()
{
	var takeOrderDiv = document.getElementsByClassName("takeOrderDiv")[0];// 
	var printOrderTicketDiv = document.getElementsByClassName("printOrderTicketDiv")[0];//
	var clearOrderTicketDiv = document.getElementsByClassName("clearOrderTicketDiv")[0];//
	var selectSize = document.getElementsByClassName("selectSize")[0];
	var newOrderHtml = document.getElementsByClassName("newOrder")[0];

	var toggleV = document.getElementsByClassName("toggle")[0];//  three_dot_menu_toggle var
	var myNav = document.getElementsByClassName("overlay")[0]; //  three_dot_menu_toggle var
	var signout = document.getElementsByClassName("signout")[0];//  signout
	var signoutDiv = document.getElementsByClassName("signoutDiv")[0];//  signout
	var signoutDiv_yes = document.getElementsByClassName("signoutDiv_yes")[0];//  signout yes
	var signoutDiv_no = document.getElementsByClassName("signoutDiv_no")[0];//  signout no
	var shutdown = document.getElementsByClassName("shutdown")[0];//  signout
	var shutdownDiv = document.getElementsByClassName("shutdownDiv")[0];//  signout
	var shutdownDiv_yes = document.getElementsByClassName("shutdownDiv_yes")[0];//  signout yes
	var shutdownDiv_no = document.getElementsByClassName("shutdownDiv_no")[0];//  signout no
	
	//var takeorderbutton = document.getElementsByClassName("takeorderbutton")[0];//  signout
	//var shutdownDiv = document.getElementsByClassName("shutdownDiv")[0];//  signout
	//var shutdownDiv_yes = document.getElementsByClassName("shutdownDiv_yes")[0];//  signout yes
	//var shutdownDiv_no = document.getElementsByClassName("shutdownDiv_no")[0];//  signout no
	
	/////////////////////  three_dot_menu_toggle
    function three_dot_menu_toggle() 
	{
        toggleV.classList.toggle("change");
		if(myNav.style.width <= '0px')
			myNav.style.width = "100px";
		else
			myNav.style.width = "0px";
    }
	this.three_dot_menu_toggle_action = function () {
		toggleV.onclick = function() 
		{
			three_dot_menu_toggle() ;
		}
	}
	/////////////////////  three_dot_menu_toggle end
	/////////////////////  sign out
	this.signout_action = function () {
		signout.onclick = function() 
		{
			three_dot_menu_toggle() ;
			shutdownDiv.style.display = 'none';
			printOrderTicketDiv.style.display = 'none';
			clearOrderTicketDiv.style.display = 'none';
			takeOrderDiv.style.display = 'none';
			signoutDiv.style.display = 'inline';
			selectSize.style.display = 'none';
			document.getElementsByClassName("newOrder")[0].style.display = 'none';
			//newOrder.style.display = 'none';
		}
		signoutDiv_yes.onclick = function() 
		{
			signoutDiv.style.display = 'none';
			//location.reload(); 
			window.location.href='http://raovatquanhta.com/app-busineseV1/';
			//window.location.href='http://localhost/app-busineseV1/';
			//alert('sign-out');		//do more function to sign out
			
		}
		signoutDiv_no.onclick = function() 
		{
			signoutDiv.style.display = 'none';
		}
	}
	/////////////////////  sign out
	/////////////////////  shut down
	this.shutdown_action = function () {
		shutdown.onclick = function() 
		{
			three_dot_menu_toggle() ;
			signoutDiv.style.display = 'none';
			printOrderTicketDiv.style.display = 'none';
			clearOrderTicketDiv.style.display = 'none';
			takeOrderDiv.style.display = 'none';	
			selectSize.style.display = 'none';
			document.getElementsByClassName("newOrder")[0].style.display = 'none';
			//newOrder.style.display = 'none';
			shutdownDiv.style.display = 'inline';			
		}
		shutdownDiv_yes.onclick = function() 
		{
			shutdownDiv.style.display = 'none';
			alert('shut down');//do more function to sign out
			
		}
		shutdownDiv_no.onclick = function() 
		{
			shutdownDiv.style.display = 'none';
		}
	}
		/////////////////////  shut down
}


function six_buttons()
{
			var receiptObj = null; 
			receiptObj = new receipt();
			receiptObj.recieptDisplayTitle();

			
	////// begin var in the 3 dot menu 
	var signoutDiv = null; var shutdownDiv = null; var myNav = null;
	var toggleV = null;
	signoutDiv = document.getElementsByClassName("signoutDiv")[0];//  
	shutdownDiv = document.getElementsByClassName("shutdownDiv")[0];//
	myNav = document.getElementsByClassName("overlay")[0];
	toggleV = document.getElementsByClassName("toggle")[0];
	////// end var in the 3 dot menu 
	
	var takeorderbutton = null; var takeOrderDiv = null; var takeOrderDiv_yes = null;
	var takeOrderDiv_no = null;
	takeorderbutton = document.getElementsByClassName("takeorderbutton")[0];//  
	takeOrderDiv = document.getElementsByClassName("takeOrderDiv")[0];//  
	takeOrderDiv_yes = document.getElementsByClassName("takeOrderDiv_yes")[0];//   yes
	takeOrderDiv_no = document.getElementsByClassName("takeOrderDiv_no")[0];//   no

	var printorderbutton = null; var printOrderTicketDiv = null; var printOrderTicketDiv_yes = null;
	var printOrderTicketDiv_no = null;
	printorderbutton = document.getElementsByClassName("printorderbutton")[0];//  
	printOrderTicketDiv = document.getElementsByClassName("printOrderTicketDiv")[0];//  
	printOrderTicketDiv_yes = document.getElementsByClassName("printOrderTicketDiv_yes")[0];//   yes
	printOrderTicketDiv_no = document.getElementsByClassName("printOrderTicketDiv_no")[0];//   no
	
	var clearorderbutton = null; var clearOrderTicketDiv = null; var clearOrderTicketDiv_yes = null;
	var clearOrderTicketDiv_no = null;
	clearorderbutton = document.getElementsByClassName("clearorderbutton")[0];//  
	clearOrderTicketDiv = document.getElementsByClassName("clearOrderTicketDiv")[0];//  
	clearOrderTicketDiv_yes = document.getElementsByClassName("clearOrderTicketDiv_yes")[0];//   yes
	clearOrderTicketDiv_no = document.getElementsByClassName("clearOrderTicketDiv_no")[0];//   no
	
	var calculatorbutton = null; var calculator = null;
	calculatorbutton = document.getElementsByClassName("calculatorbutton")[0];
	calculator = document.getElementsByClassName("calculator")[0];
	
	var menubutton = null; var menu = null; var selectSize = null;
	menubutton = document.getElementsByClassName("menubutton")[0];
	menu = document.getElementsByClassName("menu")[0];
	selectSize = document.getElementsByClassName("selectSize")[0];
	
	var orderbutton = null; var order = null; var clearPaidDiv = null; var clearPaidDiv_yes = null;
	var clearPaidDiv_no = null;
	orderbutton = document.getElementsByClassName("orderbutton")[0];
	order = document.getElementsByClassName("order")[0];
	clearPaidDiv = document.getElementsByClassName("clearPaidDiv")[0];//  
	clearPaidDiv_yes = document.getElementsByClassName("clearPaidDiv_yes")[0];//   yes
	clearPaidDiv_no = document.getElementsByClassName("clearPaidDiv_no")[0];//   no
	
	// begin ORDER TICKET ## DISPLAY 
	var items = null;
	items = document.getElementsByClassName("items")[0]; // items on order ticket ##
	// END ORDER TICKET ## DISPLAY
	
	// begin private global functions
	function menu_order_cal_button_bckgrnColorToInitial()
	{
		menubutton.style.background = '#e7e7e7';
		orderbutton.style.background = '#e7e7e7';
		calculatorbutton.style.background = '#e7e7e7';
	}
	function menu_order_cal_panel_display_ToInitial()
	{
		//var time = null;	// order ticket time
		//time = document.getElementById('Ctime');
		//time.innerHTML = '';
		//time = null;
		
		calculator.style.display = 'none';
		menu.style.display = 'none';
		order.style.display = 'none';
		var selectCheckedRadio = null;
		//selectCheckedRadio = document.querySelectorAll('input[name="photai"]');// correct code keep for reference
		//alert(selectCheckedRadio[1].value);// correct code  keep for reference
		selectCheckedRadio = document.querySelectorAll("input[type=radio]:checked");// correct code keep for reference
		//alert(selectCheckedRadio[3].value);// correct code keep for reference
		for(var i = 0; i<selectCheckedRadio.length;i++)
		{
			//alert(selectCheckedRadio[i].value); keep for reference
			selectCheckedRadio[i].checked = false;
		}
	}
	function close_all_div()
	{
	
		signoutDiv.style.display = 'none';
		shutdownDiv.style.display = 'none';
		printOrderTicketDiv.style.display = 'none';
		clearOrderTicketDiv.style.display = 'none';
		takeOrderDiv.style.display = 'none'; 		
		selectSize.style.display = 'none';
		document.getElementsByClassName("newOrder")[0].style.display = 'none';
		clearPaidDiv.style.display = 'none';
	}
	function close_menu_3dot()
	{
		if(myNav.style.width > '0px')
		{	
			myNav.style.width = "0px";
			toggleV.classList.toggle("change");
		}
	}	
	function fadeIn($element)
	{
		//$element.style.display="inline-block";
		$element.style.opacity=0;
		recurseWithDelayUp($element,0,1);
	}
	function fadeOut($element)
	{
		//$element.style.display="inline-block";
		$element.style.opacity=1;
		recurseWithDelayDown($element,1,0);
	}

	function recurseWithDelayDown($element,startFrom,stopAt)
	{
		window.setTimeout(function()
		{
			if(startFrom > stopAt )
			{
				startFrom=startFrom - 0.1;
				recurseWithDelayDown($element,startFrom,stopAt)
				$element.style.opacity=startFrom;
			}
			else
			{
				//$element.style.display="none";
				$element.parentNode.removeChild($element);
			} 
		},50);
	
	}
	function recurseWithDelayUp($element,startFrom,stopAt)
	{
		window.setTimeout(function()
		{
			if(startFrom < stopAt )
			{
				startFrom=startFrom + 0.1;
				recurseWithDelayUp($element,startFrom,stopAt)
				$element.style.opacity=startFrom;
			}
			else
			{
				$element.style.display="inline-block"
			} 
		},50);
	}
	// end private global functions
	
	///////begin take order button
	this.takeorderbutton_action = function () {
		takeorderbutton.onclick = function() 
		{ 
			close_menu_3dot();
			close_all_div();
			//document.getElementsByClassName("items")[0].getElementsByClassName("item");
			if (items.getElementsByClassName("item").length > 0 )
			takeOrderDiv.style.display = 'inline';
		}
		takeOrderDiv_yes.onclick = function() 
		{
			takeOrderDiv.style.display = 'none';
			//function databases here to get order #N
			var abc = null;abc = new ajaxClass();
			abc.takeOrder();
			abc = null;
			//alert('df');
	/*		var get_eachOrderNumber = null; var get_Cordernumber = null; var insertAdj = null;  //insertAdj is add new order at the end of the list
			insertAdj = true;
			get_eachOrderNumber = document.getElementsByClassName("eachOrderNumber");
			get_Cordernumber = document.getElementsByClassName("Cordernumber");
			//alert(get_Cordernumber[0].innerHTML);
			for(var l = 0;  l < get_eachOrderNumber.length; l++)	//if same order number then add more order description
			{
				var str = null;
				str = get_eachOrderNumber[l].innerHTML.split(' ');
				if(str[1] == get_Cordernumber[0].innerHTML)
				{
					document.getElementsByClassName("eachOrderDescription")[l].innerHTML = items.innerHTML;
					insertAdj = false;
				}
			}
			if(insertAdj == true)
			{
				var x = null;
				x =	"<tr class = 'orderTR'><td class = 'eachOrderNumber'>order #6</td><td class = 'eachOrderDescription'>"+items.innerHTML+"<div>********</div></td><td class = 'eachOrderPaid'>paid3</td><td class = 'empordertime'>employee order # and time</td></tr>";
				order.lastChild.insertAdjacentHTML("beforeend",x);
			}
	*/		

			
			//receiptObj.clearRecieptDisplay();
		}	
		takeOrderDiv_no.onclick = function() 
		{
			takeOrderDiv.style.display = 'none';
		}		
	}	
	///////end take order button
	///////begin print order ticket button
	this.printorderbutton_action = function () {
		printorderbutton.onclick = function() 
		{
			close_menu_3dot();
			close_all_div();
			if (items.getElementsByClassName("item").length > 0 )
			printOrderTicketDiv.style.display = 'inline';
		}
		printOrderTicketDiv_yes.onclick = function() 
		{
			printOrderTicketDiv.style.display = 'none';
			printTicket();
		}
		printOrderTicketDiv_no.onclick = function() 
		{
			printOrderTicketDiv.style.display = 'none';
		}
		document.getElementsByClassName("errorPrintOrderTicketOK")[0].onclick = function()
		{
			document.getElementsByClassName("errorPrintOrderTicketDiv")[0].style.display = 'none';
		}
	}
	///////end print order ticket button 
	/////////print ticket private function
	function printTicket()
	{
		var order_Number = document.getElementById("Cordernumber");
		var items = document.getElementById("items");
		
		if(order_Number.innerHTML != '')
		{
			items.style.height = 'auto';
			window.print();height:;
			items.style.height = '49.2%';
		}
		else
			document.getElementsByClassName("errorPrintOrderTicketDiv")[0].style.display = 'inline';
		items = order_Number = null;
	}
	////////end print ticket private function
	///////begin clear order ticket button
	this.clearorderbutton_action = function () {
		clearorderbutton.onclick = function() 
		{
			close_menu_3dot();
			close_all_div();
			if (items.getElementsByClassName("item").length > 0 )
			clearOrderTicketDiv.style.display = 'inline';
		}
		clearOrderTicketDiv_yes.onclick = function() 
		{
			clearOrderTicketDiv.style.display = 'none';
			//alert('clear order ticket');//do more functions
			receiptObj.clearRecieptDisplay();
		}
		clearOrderTicketDiv_no.onclick = function() 
		{
			clearOrderTicketDiv.style.display = 'none';
		}		
	}	
	///////end clear order button	ticket

	///////begin menu button
	this.menubutton_action = function () {
		menubutton.onclick = function() 
		{ 

			close_menu_3dot();
			close_all_div();
			menu_order_cal_button_bckgrnColorToInitial();
			menu_order_cal_panel_display_ToInitial();
			menubutton.style.background = 'green';
			menu.style.display = 'table';	
			/*
			var time = null;	// order ticket time
			time = document.getElementById('Ctime');
			
			var d = null; var t = null;
			 d = new Date();
			 t = d.toLocaleTimeString();
			time.innerHTML = t;
			time = null; t = null; d = null;
			*/			
			//add function "menu div display" to inline	
		}
		selectSize.onclick = function() 
		{
			selectSize.style.display = 'none';
		}
		//var menuItemBoxShadow = document.querySelectorAll('section.menuItemBoxShadow')[0];
		
		//alert(menuItemBoxShadow.querySelectorAll('li')[0].innerHTML);
		Array.prototype.forEach.call(document.querySelectorAll('div.menuItem'), function(menuEachItem) //function to select each menu item 
		{
			menuEachItem.onclick = function()
			{
				//alert(menuEachItem.querySelectorAll('li')[0].innerHTML);
				//alert(menuEachItem.nextElementSibling.name);
				//alert(menuEachItem.nextElementSibling.type);
				var parentElement = null;var radioChecked = null;
				parentElement = menuEachItem.parentElement;
				if(menuEachItem.nextElementSibling.type == 'radio')
				{
					radioChecked = parentElement.querySelectorAll("input[type=radio]:checked");
					close_all_div();
					close_menu_3dot();
					if (radioChecked.length == 0)
						selectSize.style.display = 'inline';
					else
					{
						sendCurrentMenuItemToOrderTicketNumber(parentElement,items,radioChecked);	
					}
				}
				else
				{
					radioChecked  = [];
					sendCurrentMenuItemToOrderTicketNumber(parentElement,items,radioChecked);
				}
				
			}
		})
		function sendCurrentMenuItemToOrderTicketNumber(element,div_place,radioChecked)
		{
			var numberAndItemName = null; var price = null; var size = null; var sizeAndPriceSplit = null;
			var numberAndTitleSplit = null; var itemnum = null;
			//var receiptObj = null;
			//receiptObj = new receipt();
			numberAndItemName = element.querySelectorAll('li')[0].innerHTML;
			numberAndTitleSplit = numberAndItemName.split('-');
			//itemnum = Number(numberAndTitleSplit[0].substring(1));
			itemnum = numberAndTitleSplit[0];
			if( radioChecked.length == 1)
			{
				sizeAndPriceSplit = radioChecked[0].value.split('-');
				price = sizeAndPriceSplit[1];
				size = sizeAndPriceSplit[0];
				div_place.innerHTML += "<div id = "+itemnum+" class = 'item'><div style = 'float:left;'>"+numberAndItemName+" ("+size+")</div><div style = 'float:right;'>"+price+"</div><br></div>";
				//calculatSubTotal();
				receiptObj.receipt_action();
				
			}
			else
			{
				sizeAndPriceSplit = element.querySelectorAll('label')[0].innerHTML.split('-');
				price = sizeAndPriceSplit[1];
				div_place.innerHTML += "<div id = "+itemnum+" class = 'item'><div style = 'float:left;'>"+numberAndItemName+"</div><div style = 'float:right;'>"+price+"</div><br></div>";
				//calculatSubTotal();
				receiptObj.receipt_action();
			}
		}
		/*function calculatSubTotal()
		{
			var getAllItemFromItemsDiv = null; var subTotal = 0; var displaySubTotal = null;
			var tax = 0.0819; var displayTotal = null;var displayTax = null;
			displaySubTotal = document.getElementById("subtotal");
			displayTotal = document.getElementById("total");
			displayTax = document.getElementById("tax");
			var getAllItemFromItemsDiv = document.getElementsByClassName("item");
			for(var i = 0; i < getAllItemFromItemsDiv.length; i++)
			{
				subTotal = subTotal + Number(getAllItemFromItemsDiv[i].lastChild.innerHTML);
			}
			displaySubTotal.innerHTML = subTotal.toFixed(2);
			displayTax.innerHTML = (tax*subTotal).toFixed(2);
			displayTotal.innerHTML = (subTotal+tax*subTotal).toFixed(2);
		}*/
	}	
	///////end menu button
	function foreach_eachOrderNumber()  //function to show each order numbers
	{
							Array.prototype.forEach.call(document.querySelectorAll('.eachOrderNumber'), function(eachOrderNumber) //function to show each order numbers
					{
						eachOrderNumber.addEventListener("click",function ()
						{	
							var str = null;
							str = eachOrderNumber.nextElementSibling.nextElementSibling.nextElementSibling.innerHTML.split(' ' );
							items.innerHTML = eachOrderNumber.nextElementSibling.innerHTML;
							document.getElementById('Cordernumber').innerHTML = '#'+str[1];
							document.getElementById('Ctime').innerHTML = ' '+str[2];
							document.getElementById('Cemp').innerHTML = ' '+str[0];
							var receiptObj = null; 
							receiptObj = new receipt();
							receiptObj.receipt_action();
							receiptObj = null;
							str = null;
						})
					});
	}
	this.foreach_eachOrderNumber_outsideClass = function()
	{
		foreach_eachOrderNumber();
	}
	function foreach_eachOrderPaid() ////// function prototybe use for manager
	{
			Array.prototype.forEach.call(document.querySelectorAll('.eachOrderPaid'), function(eachOrderPaid) //function for each Order Paid 
			{
				eachOrderPaid.onclick = function()
				{

					//clearPaidDiv.firstChild.innerHTML = eachOrderPaid.parentElement.firstChild.innerHTML;
					//clearPaidDiv.firstChild.innerHTML = 'paid ' + eachOrderPaid.parentElement.firstChild.nextElementSibling.innerHTML;
					//orderNumberSplit = eachOrderPaid.parentElement.firstChild.nextElementSibling.innerHTML.split('#');
					//orderNumberSplit = eachOrderPaid.previousElementSibling.previousElementSibling.innerHTML.split('#');
					clearPaidDiv.firstChild.innerHTML = 'paid ' + eachOrderPaid.previousElementSibling.previousElementSibling.innerHTML;
					clearPaidDiv.style.display = 'inline';
					clearPaidDiv_no.onclick = function() 
					{
						clearPaidDiv.style.display = 'none';
					}
					clearPaidDiv_yes.onclick = function() 
					{
						//update to database function
						
						orderNumberSplit = eachOrderPaid.previousElementSibling.previousElementSibling.innerHTML.split('#');
						//alert(orderNumberSplit[1]);
						var updateregister = null;
						updateregister = new ajaxClass();
						updateregister.updateRegisterOrder(orderNumberSplit[1]);
						//updateregister.autoDisplayOrderList();
						updateregister = null;
						
						clearPaidDiv.style.display = 'none';
						fadeOut(eachOrderPaid.parentNode); 
						receiptObj.clearRecieptDisplay();	
						orderNumberSplit = null;					
					}					
					//fadeOut(eachOrderPaid.parentNode); 
					//receiptObj.clearRecieptDisplay();
				}
			});	
	}		
	this.foreach_eachOrderPaid_outsideClass = function()  ////// function prototybe use for manager
	{
		foreach_eachOrderPaid() ;
	}			
	///////begin order button
	this.orderorbutton_action = function () 
	{
		orderbutton.onclick = function() 
		{ 
			close_menu_3dot();
			close_all_div();
			menu_order_cal_button_bckgrnColorToInitial();
			menu_order_cal_panel_display_ToInitial();
			orderbutton.style.background = 'green';
			order.style.display = 'table';	
			foreach_eachOrderNumber();
			foreach_eachOrderPaid();
		}
	}	
	///////end order button
	///////begin calculator button
	this.calculatorbutton_action = function () {
		var calscr = null;		
		var calBtn = null;
		calBtn = document.getElementsByClassName("calBtn");
		calscr = document.getElementsByClassName("cal_screen")[0];
		calscr.innerHTML = "";
		function checkCal_screenFomat()
		{
			var check_format = null;
			check_format = calscr.innerHTML.split(/(?:[\d\.]|[\d])+/);
			for(var i = 0; i < check_format.length-1; i++)
			{
				switch(check_format[i])
				{
					case '':
					case '+':
					case '-':
					case '*':
					case '/':break;
					default: return false;
				}	
			}
			if(check_format[check_format.length-1]== '+') return false;
			if(check_format[check_format.length-1]== '-') return false;
			if(check_format[check_format.length-1]== '*') return false;
			if(check_format[check_format.length-1]== '/') return false;
			//alert(check_format.toString());
			return true;
		}
		/* no need recursive function
		function recursiveMinus(array)
		{
			var shift = array.shift();
			shift = Number(shift);
			if(array.length == 0)
				return shift;
			else
				return (shift - recursivePlus(array));
		}
		*/
		function caculate(equation)
		{
			var p = null; var numbersPluMinus = null; var signPluMinus = null;var totalPluMinus = null;
			numbersPluMinus = equation.split(/[+]|[-]+/);//split + or - to get numbers
			signPluMinus = equation.split(/(?:[\d\.]|[\d])+/);	//split numbers to get sign
			signPluMinus.pop(); //pop empty array
			signPluMinus.shift(); // shift empty array
			for(var l = 0; l < numbersPluMinus.length; l++)// multiple first
			{
				if( isNaN(numbersPluMinus[l]) )
				{
					var numbersMulDiv = null; var signMulDiv = null;var totalMulDiv = null;
					numbersMulDiv = numbersPluMinus[l].split(/[*]|['/']+/);  //split * or / to get numbers
					signMulDiv = numbersPluMinus[l].split(/(?:[\d\.]|[\d])+/);	//split numbers to get sign					
					signMulDiv.pop(); //pop empty array
					signMulDiv.shift(); // shift empty array	
					totalMulDiv = Number(numbersMulDiv[0]);
					for(var n = 0; n < signMulDiv.length; n++)
					{
						switch (signMulDiv[n])
						{
							case '/': totalMulDiv = totalMulDiv/Number(numbersMulDiv[n+1]);
							break;
							case '*':totalMulDiv = totalMulDiv*Number(numbersMulDiv[n+1]);
							break;
						}					
					}
					numbersPluMinus[l] = totalMulDiv;
				}
			}
			totalPluMinus = Number(numbersPluMinus[0]);
			p = 0;
			for(var l = 0;  l < signPluMinus.length; l++) //addition then
			{			
				switch (signPluMinus[l])
				{	
					case '+': totalPluMinus = totalPluMinus+Number(numbersPluMinus[p+1]);p++;
					break;
					case '-':totalPluMinus = totalPluMinus-Number(numbersPluMinus[p+1]);p++;
					break;
				}
			}	  
			return totalPluMinus;	
		}
		
		calculatorbutton.onclick = function() 
		{ 
			close_menu_3dot();
			close_all_div();
			menu_order_cal_button_bckgrnColorToInitial();
			menu_order_cal_panel_display_ToInitial();
			calculatorbutton.style.background = 'green';
			calscr.innerHTML = "";
			calculator.style.display = 'table';	
			
		}
        calBtn[0].onclick = function() { calscr.innerHTML = calscr.innerHTML.substring(0,calscr.innerHTML.length-1);}//back
		calBtn[1].onclick = function() { calscr.innerHTML = "";}//clear
		calBtn[2].onclick = function() { }//none
		calBtn[3].onclick = function() { calscr.innerHTML += calBtn[3].value;}//*
        calBtn[4].onclick = function() { calscr.innerHTML += calBtn[4].value;}//7
		calBtn[5].onclick = function() { calscr.innerHTML += calBtn[5].value;}//8
		calBtn[6].onclick = function() { calscr.innerHTML += calBtn[6].value;}//9
		calBtn[7].onclick = function() { calscr.innerHTML += calBtn[7].value;}// /
        calBtn[8].onclick = function() { calscr.innerHTML += calBtn[8].value;}//4
		calBtn[9].onclick = function() { calscr.innerHTML += calBtn[9].value;}//5
		calBtn[10].onclick = function() { calscr.innerHTML += calBtn[10].value;}//6
		calBtn[11].onclick = function() { calscr.innerHTML += calBtn[11].value;}//+
        calBtn[12].onclick = function() { calscr.innerHTML += calBtn[12].value;}//1
		calBtn[13].onclick = function() { calscr.innerHTML += calBtn[13].value;}//2
		calBtn[14].onclick = function() { calscr.innerHTML += calBtn[14].value;}//3
		calBtn[15].onclick = function() { calscr.innerHTML += calBtn[15].value;}//-
        calBtn[16].onclick = function() { calscr.innerHTML += calBtn[16].value;}//0
		calBtn[17].onclick = function() { calscr.innerHTML += calBtn[17].value;}//dot
		calBtn[18].onclick = function() { 
			if(checkCal_screenFomat() == true)
				calscr.innerHTML = caculate(calscr.innerHTML);
			else calscr.innerHTML = 'Error';}//=
	}	
	///////end calculator button
}

function receipt()		// or order ticket  class##
{	
	function calculatSubTotal()
	{
		var getAllItemFromItemsDiv = null; var subTotal = 0; var displaySubTotal = null;
		var tax = 0.0819; var displayTotal = null;var displayTax = null;
		displaySubTotal = document.getElementById("subtotal");
		displayTotal = document.getElementById("total");
		displayTax = document.getElementById("tax");
		//var getAllItemFromItemsDiv = document.getElementsByClassName("item");
		var getAllItemFromItemsDiv = document.getElementsByClassName("items")[0].getElementsByClassName("item");
		for(var i = 0; i < getAllItemFromItemsDiv.length; i++)
		{
			subTotal = subTotal + Number(getAllItemFromItemsDiv[i].childNodes[1].innerHTML);
			//alert(getAllItemFromItemsDiv[i].childNodes[1].innerHTML);
		}
		//alert(subTotal);
		//subTotal = null;
		displaySubTotal.innerHTML = subTotal.toFixed(2);
		displayTax.innerHTML = (tax*subTotal).toFixed(2);
		displayTotal.innerHTML = (subTotal+tax*subTotal).toFixed(2);
	}
	function printMousePos(e,num) 
	{
		var cursorX = null;var cursorY = null;var arrow_position = null;var itemspanvar = null;
		cursorX = e.pageX;
		cursorY = e.pageY;
		arrow_position = document.getElementById('AddNoteOrVoid');
		itemspanvar = document.getElementById('itemspan');
		arrow_position.style.top = e.pageY+'px';
		arrow_position.style.left = e.pageX+'px';
		arrow_position.style.display = "inline";
		itemspanvar.innerHTML = '#'+num;
		arrow_position.style.textAlign = "center";
	}
	function voidfunc(row)
	{
		var voidbutton = null;
		voidbutton = document.getElementById('voidbutton');
		voidbutton.onclick = function() 
		{ 
			row.remove();
			calculatSubTotal();
			document.getElementById('AddNoteOrVoid').style.display = "none";
		//document.getElementById("change").innerHTML =  change(document.getElementById("cash").innerHTML, document.getElementById("credit").innerHTML,document.getElementById("total").innerHTML);
		}		
	}
	function addnotefunc(row)
	{	
		var	addnotebutton = null;
		addnotebutton = document.getElementById('addnotebutton');
		addnotebutton.onclick = function() 
		{
			document.getElementsByClassName("keyboard")[0].style.top = '50%';
			document.getElementsByClassName("keyboard")[0].style.left = '50%';
			document.getElementsByClassName("keyboard")[0].style.transform = "translate(-50%, -50%)";
			document.getElementsByClassName("keyboard")[0].style.display = 'block';
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_action(row);
			keyboar = null;
		}
	}
	function close()
	{
		var	closebutton = null;
		closebutton = document.getElementById('closebutton');
		closebutton.onclick = function() { 
		var arrow_position = document.getElementById('AddNoteOrVoid');
		arrow_position.style.display = "none";
		//fixed this line
		arrow_position = null;
		}	
	}
	
	this.receipt_action = function () 
	{
		var pOfi = null;var p = null;
		calculatSubTotal();		
		p = document.querySelectorAll(".item");
		
		for(pOfi=0;pOfi < p.length; pOfi++){
			p[pOfi].onclick=function(event){
				printMousePos(event,this.id);
				voidfunc(this);
				addnotefunc(this);
				close();
			}
		}
		
	}
	this.clearRecieptDisplay = function()
	{
		var items = null; var displaySubTotal = null;
		var displayTotal = null;var displayTax = null;
		var empName = null; var date = null; var time = null;
		
		document.getElementById('Cordernumber').innerHTML = '';
		document.getElementById('Ctime').innerHTML = '';
		document.getElementById('Cemp').innerHTML = '<?php echo $_POST['emplogin'];?>';
		items = document.getElementsByClassName("items")[0];
		displaySubTotal = document.getElementById("subtotal");
		displayTotal = document.getElementById("total");
		displayTax = document.getElementById("tax");
		items.innerHTML = '';
		displaySubTotal.innerHTML = '0.00';
		displayTotal.innerHTML = '0.00';
		displayTax.innerHTML = '0.00';
		
		 items = null;  displaySubTotal = null;
		 displayTotal = null; displayTax = null;
		 empName = null;  date = null;  time = null;		
	}
	this.recieptDisplayTitle = function()
	{
		var orderTicket = null; var tel = null; var storeName = null; var date = null; var time = null; var empName = null;
		var d = null; var empRank = null;
		d = new Date();

		orderTicket = document.getElementById('Cordernumber');
		tel = document.getElementById('Ctel');
		storeName = document.getElementById('Cbranch');
		date = document.getElementById('Cdate');
		time = document.getElementById('Ctime');
		empName = document.getElementById('Cemp');
		empRank = document.getElementById('CempRank');
		
		tel.innerHTML = '888-888-8888';
		storeName.innerHTML = 'PHO 9';
		date.innerHTML = d.toLocaleDateString();
		//time.innerHTML = '';
		empName.innerHTML = '<?php echo $_POST['emplogin'];?>';
		empRank.innerHTML = '<?php echo $position;?>';
		
		orderTicket = null;  tel = null;  storeName = null;  date = null;  time = null;  empName = null;
		d = null; empRank = null;
	}
}

function autoLogout()
{
	var timer = null;
	function resetTimer() 
	{ 
		//clearTimeout(timer);
		//timer = setTimeout(logout(), 5000); 
		clearInterval(timer);
		timer = setInterval(function(){logout();}, 180000); 
		//timer = setInterval(alert('dddd'), 5000);
		//alert('click');
    }
 	this.autologout_action = function()
	{
		//window.onload = resetTimer(); 
        //window.onmousemove = resetTimer(); 
        //window.onmousedown = resetTimer(); 
        //window.ontouchstart = resetTimer(); 
     //   window.onclick = resetTimer(); 
        //window.onkeypress = resetTimer();
		window.addEventListener('load', 
		function()
		{
			resetTimer();
		});
		window.addEventListener('click', 
		function()
		{
			resetTimer();
		});
	}
	
	function logout() 
	{ 
		window.location.href='http://raovatquanhta.com/app-busineseV1/';
    } 
	timer = null;
}

function ajaxClass()
{
	function xmlhttpfunc()
	{
		var xmlhttp = null;
		try
		{
			xmlhttp = new XMLHttpRequest();
		}
		catch(e)
		{ 
			try
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e)
				{
					alert("your browser broker");
					return false;
				}
			}
		}
		return xmlhttp;
	}
	
	this.takeOrder = function()
	{
		var oData = null; var takeOrder = null; var xmlhttp = null;
		var date = null; var time = null; var orderNumber = null; var empName = null;
		var listOfItems = null; var registerStatus = null; var kitchenStatus = null;
		
		//date = new Date().toISOString().slice(0,10);
		date = new Date().toLocaleDateString('en-CA');
		time = document.getElementsByClassName("my_time")[0].innerHTML;
		orderNumber = document.getElementById('Cordernumber').innerHTML;
		empName = document.getElementById('Cemp').innerHTML;
		//listOfItems = document.getElementsByClassName("items")[0].innerHTML+"<div>********</div>"; 
		listOfItems = document.getElementsByClassName("items")[0].innerHTML; 
		registerStatus = 'notpaidyet';
		kitchenStatus = 'preparingfood';
		
		xmlhttp = xmlhttpfunc();
		takeOrder = [];
		oData = new FormData();
		oData.append('takeOrder[]', date );
		oData.append('takeOrder[]', time );
		oData.append('takeOrder[]', orderNumber );
		oData.append('takeOrder[]', empName );
		oData.append('takeOrder[]', listOfItems );
		//oData.append('takeOrder[]', registerStatus );
		//oData.append('takeOrder[]', kitchenStatus );
		if(xmlhttp)
		{   
			xmlhttp.open("post",'./url/takeorder.php',true);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{	
					//alert(xmlhttp.responseText);
					var responseText = null;
					var newOrder = null;
					var orderNumb = null;
					var orderTime = null;
					responseText = xmlhttp.responseText.split(' ');
					newOrder = responseText[0];
					orderNumb = responseText[1];
					orderTime = responseText[2];

					if(newOrder == 'new')
					{
						var x = null;
						var position = '<?php echo $position;?>';
						if(position == 'manager')
							x =	"<tr class = 'orderTR'><td class = 'eachOrderNumber' >order #"+orderNumb+"</td><td class = 'eachOrderDescription'>"+items.innerHTML+"<div>********</div></td><td class = 'eachOrderPaid'>paid</td><td class = 'empordertime'><?php echo $_POST['emplogin'];?> "+orderNumb+" "+orderTime+"</td></tr>";
						else
							x =	"<tr class = 'orderTR'><td class = 'eachOrderNumber' >order #"+orderNumb+"</td><td class = 'eachOrderDescription'>"+items.innerHTML+"<div>********</div></td><td class = 'eachOrderPaid' style = 'display:none'>paid</td><td class = 'empordertime'><?php echo $_POST['emplogin'];?> "+orderNumb+" "+orderTime+"</td></tr>";
						
						document.getElementsByClassName("order")[0].tBodies[0].lastElementChild.insertAdjacentHTML("afterend",x);
						document.getElementById('Cordernumber').innerHTML = '#'+orderNumb;
						document.getElementById('Ctime').innerHTML = ' '+orderTime;
						document.getElementsByClassName("items")[0].innerHTML = document.getElementsByClassName("items")[0].innerHTML + "<div>********</div>";
						document.getElementsByClassName("newOrder")[0].innerHTML = 'New Order #'+orderNumb+"<br> OK";
						document.getElementsByClassName("newOrder")[0].style.display = 'inline';
						document.getElementsByClassName("newOrder")[0].onclick = function() 
						{
							document.getElementsByClassName("newOrder")[0].style.display = 'none';
						}
						position = x = null;
					}
					else if(newOrder == 'old')
					{
						for(var l = 0;  l < document.getElementsByClassName("eachOrderNumber").length; l++)	//if same order number then add more order description
						{
							var str = null;
							str = document.getElementsByClassName("eachOrderNumber")[l].innerHTML.split(' ');
							if(str[1] == document.getElementsByClassName("Cordernumber")[0].innerHTML)
							{
								document.getElementsByClassName("eachOrderDescription")[l].innerHTML = document.getElementsByClassName("items")[0].innerHTML+'<div>********</div>';
							}
							str = null;
						}
						document.getElementsByClassName("items")[0].innerHTML = document.getElementsByClassName("items")[0].innerHTML + "<div>********</div>";
						document.getElementById('Ctime').innerHTML = ' '+orderTime;
						document.getElementsByClassName("newOrder")[0].innerHTML = 'Order #'+orderNumb+" has changed<br> OK";
						document.getElementsByClassName("newOrder")[0].style.display = 'inline';
						document.getElementsByClassName("newOrder")[0].onclick = function() 
						{
							document.getElementsByClassName("newOrder")[0].style.display = 'none';
						}						
					}
					else
					{
						document.getElementsByClassName("newOrder")[0].innerHTML = "Error! Try Order Again<br> OK";
						document.getElementsByClassName("newOrder")[0].style.display = 'inline';
						document.getElementsByClassName("newOrder")[0].onclick = function() 
						{
							document.getElementsByClassName("newOrder")[0].style.display = 'none';
						}
					}
					
					//if(xmlhttpfunc().responseText)
					//printTicket();
					//delete xmlhttpfunc();
					delete xmlhttp;
					xmlhttp = null;
				}
				else
				{
					//alert('try again');
					//search why alert run 2 times before access to takeorder.php
				}
			}
			xmlhttp.send(oData);
		
		}
		
		 oData = null;  takeOrder = null; 
		 date = null;  time = null;  orderNumber = null;  empName = null;
		 listOfItems = null;  registerStatus = null;  kitchenStatus = null;
	}
	
	this.updateRegisterOrder = function(orderNumber)
	{
		var oData = null; var updateOrder = null; var xmlhttp = null;
		var date = null; var time = null; var empName = null;
		var listOfItems = null; var registerStatus = null; var kitchenStatus = null;
		
		date = new Date().toLocaleDateString('en-CA');
		registerStatus = 'paid';
		
		xmlhttp = xmlhttpfunc();
		updateOrder = [];
		oData = new FormData();
		oData.append('updateOrder[]', date );
		//oData.append('updateOrder[]', '2021-02-13' );
		oData.append('updateOrder[]', orderNumber );
		if(xmlhttp)
		{   
			xmlhttp.open("post",'./url/updateregisterorder.php',true);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{	
					//alert(xmlhttp.responseText);
					delete xmlhttp;
					xmlhttp = null;
				}
				else
				{
					//alert('try again');
					//search why alert run 2 times before access to takeorder.php
				}
			}
			xmlhttp.send(oData);
		
		}
		
		 oData = null;  updateOrder = null;  xmlhttp = null;
		 date = null;  time = null;  empName = null;
		 listOfItems = null;  registerStatus = null;  kitchenStatus = null;
	}	
	
	this.autoDisplayOrderList = function(empLocal,positionLocal)		// display both manager and employee
	{
		var xmlhttp = null;var oData = null;var autoDisplayLocal = null;var date = null;
		xmlhttp = xmlhttpfunc();
		autoDisplayLocal = [];
		oData = new FormData();
		//date = new Date().toLocaleDateString('en-CA');
		//oData.append('autoDisplayLocal[]', date );
		//oData.append('autoDisplayLocal[]', '2021-02-13' );
		oData.append('autoDisplayLocal[]', empLocal );
		oData.append('autoDisplayLocal[]', positionLocal );
		if(xmlhttp)
		{   
			xmlhttp.open("post",'./url/autodisplayorderlist.php',true);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{	
					document.getElementsByClassName("order")[0].innerHTML =  "<tr class = 'orderTR'></tr>" + xmlhttp.responseText;
					var eachOrderNumber = new six_buttons();
					eachOrderNumber.foreach_eachOrderNumber_outsideClass();
					eachOrderNumber.foreach_eachOrderPaid_outsideClass();
					eachOrderNumber = null;		
					delete xmlhttp;
					xmlhttp = null;
				}
				else
				{
					//alert('try again');
					//search why alert run 2 times before access to takeorder.php
					//delete xmlhttp;
					//xmlhttp = null;
				}
			}
			xmlhttp.send(oData);
		
		}
	 oData = null;  autoDisplayLocal = null; 
	 date = null;
	}
	
}

function loginClass()
{
	function xmlhttpfunc()
	{
		var xmlhttp = null;
		try
		{
			xmlhttp = new XMLHttpRequest();
		}
		catch(e)
		{ 
			try
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e)
				{
					alert("your browser broker");
					return false;
				}
			}
		}
		return xmlhttp;
	}	

	this.empLogin = function()
	{
		if(xmlhttp)
		{   
			xmlhttp.open("post",'./url/login.php',true);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{	
					//alert(xmlhttp.responseText);
					delete xmlhttp;
					xmlhttp = null;
				}
				else
				{
					//alert('try again');
					//search why alert run 2 times before access to takeorder.php
				}
			}
			xmlhttp.send(oData);
		}	
	}
}


/////////key board class
function keyBoard()
{
	var keyscr = null;var keyBtn = null; var keyboardpanel = null;
	keyboardpanel = document.getElementById("keyboard");
	keyscr = document.getElementsByClassName("key_screen")[0];
	keyscr.innerHTML = '';
	//alert(row.lastChild.node);
	//keyscr.innerHTML = row.lastChild.innerHTML;
	keyBtn = document.getElementsByClassName("key");
	//////begin key board global functions
			//begin drag keyboard
	//var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
	function dragElement(elmnt) 
	{
		var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
		if (document.getElementById(elmnt.id + "move")) 
		{
			/* if present, the header is where you move the DIV from:*/
			document.getElementById(elmnt.id + "move").onmousedown = dragMouseDown;
		} 
		else 
		{
			/* otherwise, move the DIV from anywhere inside the DIV:*/
			elmnt.onmousedown = dragMouseDown;
		}
		function dragMouseDown(e) 
		{
			e = e || window.event;
			e.preventDefault();
			// get the mouse cursor position at startup:
			pos3 = e.clientX;
			pos4 = e.clientY;
			document.onmouseup = closeDragElement;
		// call a function whenever the cursor moves:
			document.onmousemove = elementDrag;
		}

		function elementDrag(e) 
		{
			e = e || window.event;
			e.preventDefault();
		// calculate the new cursor position:
			pos1 = pos3 - e.clientX;
			pos2 = pos4 - e.clientY;
			pos3 = e.clientX;
			pos4 = e.clientY;
		// set the element's new position:
			elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
			elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
		}

		function closeDragElement()
		{
			/* stop moving when mouse button is released:*/
			document.onmouseup = null;
			document.onmousemove = null;
		}
	}
	
	//============end drag keyboard======	
	
	//////end key board global private functions
	
	this.keyBoard_action = function (row) 
	{
		if(row.lastChild.innerHTML != '')
			keyscr.innerHTML = row.lastChild.innerHTML;
		dragElement(keyboardpanel);
        keyBtn[0].onclick = function() 
		{ 
			keyboardpanel.style.display = 'none';
			document.getElementById('AddNoteOrVoid').style.display = "none";
		}; //X close 
		keyBtn[1].onclick = function() { keyscr.innerHTML += "1";};
		keyBtn[2].onclick = function() { keyscr.innerHTML += "2";};
		keyBtn[3].onclick = function() { keyscr.innerHTML += "3";};
		keyBtn[4].onclick = function() { keyscr.innerHTML += "4";};
		keyBtn[5].onclick = function() { keyscr.innerHTML += "5";};
		keyBtn[6].onclick = function() { keyscr.innerHTML += "6";};
		keyBtn[7].onclick = function() { keyscr.innerHTML += "7";};
		keyBtn[8].onclick = function() { keyscr.innerHTML += "8";};
		keyBtn[9].onclick = function() { keyscr.innerHTML += "9";};
		keyBtn[10].onclick = function() { keyscr.innerHTML += "0";};
		keyBtn[11].onclick = function() { keyscr.innerHTML = keyscr.innerHTML.substring(0,keyscr.innerHTML.length-1);}; //backspace
		keyBtn[12].onclick = function() { keyscr.innerHTML += "q";};
		keyBtn[13].onclick = function() { keyscr.innerHTML += "w";};
		keyBtn[14].onclick = function() { keyscr.innerHTML += "e";};
		keyBtn[15].onclick = function() { keyscr.innerHTML += "r";};
		keyBtn[16].onclick = function() { keyscr.innerHTML += "t";};
		keyBtn[17].onclick = function() { keyscr.innerHTML += "y";};
		keyBtn[18].onclick = function() { keyscr.innerHTML += "u";};
		keyBtn[19].onclick = function() { keyscr.innerHTML += "i";};
		keyBtn[20].onclick = function() { keyscr.innerHTML += "o";};
		keyBtn[21].onclick = function() { keyscr.innerHTML += "p";};
		keyBtn[22].onclick = function() { keyscr.innerHTML += "a";};
		keyBtn[23].onclick = function() { keyscr.innerHTML += "s";};
		keyBtn[24].onclick = function() { keyscr.innerHTML += "d";};
		keyBtn[25].onclick = function() { keyscr.innerHTML += "f";};
		keyBtn[26].onclick = function() { keyscr.innerHTML += "g";};
		keyBtn[27].onclick = function() { keyscr.innerHTML += "h";};
		keyBtn[28].onclick = function() { keyscr.innerHTML += "j";};
		keyBtn[29].onclick = function() { keyscr.innerHTML += "k";};
		keyBtn[30].onclick = function() { keyscr.innerHTML += "l";};
		keyBtn[31].onclick = function() 
		{ 
			/*if(keyscr.innerHTML != '')
			{
			var x = "<div id='note' class = 'note'>note: " + keyscr.innerHTML + "</div>";
			//row.insertAdjacentHTML("afterend",x);
			row.lastChild.insertAdjacentHTML("afterend",x);
			document.getElementsByClassName("keyboard")[0].style.display = 'none';
			document.getElementById('AddNoteOrVoid').style.display = "none";;
			}
		*/	
			if(row.lastChild.innerHTML != '')
			{
				row.lastChild.innerHTML = keyscr.innerHTML;
				document.getElementsByClassName("keyboard")[0].style.display = 'none';
				document.getElementById('AddNoteOrVoid').style.display = "none";
			}
			else
			{
				var x = "<div id='note' class = 'note'>note: " + keyscr.innerHTML + "</div>";
				//row.insertAdjacentHTML("afterend",x);
				row.lastChild.insertAdjacentHTML("afterend",x);
				document.getElementsByClassName("keyboard")[0].style.display = 'none';
				document.getElementById('AddNoteOrVoid').style.display = "none";				
			}
		};	//enter key
		keyBtn[32].onclick = function() { keyscr.innerHTML += "z";};
		keyBtn[33].onclick = function() { keyscr.innerHTML += "x";};
		keyBtn[34].onclick = function() { keyscr.innerHTML += "c";};
		keyBtn[35].onclick = function() { keyscr.innerHTML += "v";};
		keyBtn[36].onclick = function() { keyscr.innerHTML += "b";};
		keyBtn[37].onclick = function() { keyscr.innerHTML += "n";};
		keyBtn[38].onclick = function() { keyscr.innerHTML += "m";};
		keyBtn[39].onclick = function() { keyscr.innerHTML += " ";};  //space
	} 
	
	this.keyBoard_inputText = function (row) 
	{
		dragElement(keyboardpanel);
        keyBtn[0].onclick = function() 
		{ 
			keyboardpanel.style.display = 'none';
			
		}; //X close 
		keyBtn[1].onclick = function() { keyscr.innerHTML += "1";row.value += "1"};
		keyBtn[2].onclick = function() { keyscr.innerHTML += "2";row.value += "2"};
		keyBtn[3].onclick = function() { keyscr.innerHTML += "3";row.value += "3"};
		keyBtn[4].onclick = function() { keyscr.innerHTML += "4";row.value += "4"};
		keyBtn[5].onclick = function() { keyscr.innerHTML += "5";row.value += "5"};
		keyBtn[6].onclick = function() { keyscr.innerHTML += "6";row.value += "6"};
		keyBtn[7].onclick = function() { keyscr.innerHTML += "7";row.value += "7"};
		keyBtn[8].onclick = function() { keyscr.innerHTML += "8";row.value += "8"};
		keyBtn[9].onclick = function() { keyscr.innerHTML += "9";row.value += "9"};
		keyBtn[10].onclick = function() { keyscr.innerHTML += "0";row.value += "0"};
		keyBtn[11].onclick = function() { 
			keyscr.innerHTML = keyscr.innerHTML.substring(0,keyscr.innerHTML.length-1);
			row.value = row.value.substring(0,row.value.length-1);
		}; //backspace
		keyBtn[12].onclick = function() { keyscr.innerHTML += "q";row.value += "g"};
		keyBtn[13].onclick = function() { keyscr.innerHTML += "w";row.value += "w"};
		keyBtn[14].onclick = function() { keyscr.innerHTML += "e";row.value += "e"};
		keyBtn[15].onclick = function() { keyscr.innerHTML += "r";row.value += "r"};
		keyBtn[16].onclick = function() { keyscr.innerHTML += "t";row.value += "t"};
		keyBtn[17].onclick = function() { keyscr.innerHTML += "y";row.value += "y"};
		keyBtn[18].onclick = function() { keyscr.innerHTML += "u";row.value += "u"};
		keyBtn[19].onclick = function() { keyscr.innerHTML += "i";row.value += "i"};
		keyBtn[20].onclick = function() { keyscr.innerHTML += "o";row.value += "o"};
		keyBtn[21].onclick = function() { keyscr.innerHTML += "p";row.value += "p"};
		keyBtn[22].onclick = function() { keyscr.innerHTML += "a";row.value += "a"};
		keyBtn[23].onclick = function() { keyscr.innerHTML += "s";row.value += "s"};
		keyBtn[24].onclick = function() { keyscr.innerHTML += "d";row.value += "d"};
		keyBtn[25].onclick = function() { keyscr.innerHTML += "f";row.value += "f"};
		keyBtn[26].onclick = function() { keyscr.innerHTML += "g";row.value += "g"};
		keyBtn[27].onclick = function() { keyscr.innerHTML += "h";row.value += "h"};
		keyBtn[28].onclick = function() { keyscr.innerHTML += "j";row.value += "j"};
		keyBtn[29].onclick = function() { keyscr.innerHTML += "k";row.value += "k"};
		keyBtn[30].onclick = function() { keyscr.innerHTML += "l";row.value += "l"};
		keyBtn[31].onclick = function() 
		{ 
			keyboardpanel.style.display = 'none';
		};	//enter key
		keyBtn[32].onclick = function() { keyscr.innerHTML += "z";row.value += "z"};
		keyBtn[33].onclick = function() { keyscr.innerHTML += "x";row.value += "x"};
		keyBtn[34].onclick = function() { keyscr.innerHTML += "c";row.value += "c"};
		keyBtn[35].onclick = function() { keyscr.innerHTML += "v";row.value += "v"};
		keyBtn[36].onclick = function() { keyscr.innerHTML += "b";row.value += "b"};
		keyBtn[37].onclick = function() { keyscr.innerHTML += "n";row.value += "n"};
		keyBtn[38].onclick = function() { keyscr.innerHTML += "m";row.value += "m"};
		keyBtn[39].onclick = function() { keyscr.innerHTML += " ";row.value += " "};  //space
	}
	this.keyBoard_inputPassword = function (row) 
	{
		dragElement(keyboardpanel);
        keyBtn[0].onclick = function() 
		{ 
			keyboardpanel.style.display = 'none';
			
		}; //X close 
		keyBtn[1].onclick = function() { keyscr.innerHTML += "*";row.value += "1"};
		keyBtn[2].onclick = function() { keyscr.innerHTML += "*";row.value += "2"};
		keyBtn[3].onclick = function() { keyscr.innerHTML += "*";row.value += "3"};
		keyBtn[4].onclick = function() { keyscr.innerHTML += "*";row.value += "4"};
		keyBtn[5].onclick = function() { keyscr.innerHTML += "*";row.value += "5"};
		keyBtn[6].onclick = function() { keyscr.innerHTML += "*";row.value += "6"};
		keyBtn[7].onclick = function() { keyscr.innerHTML += "*";row.value += "7"};
		keyBtn[8].onclick = function() { keyscr.innerHTML += "*";row.value += "8"};
		keyBtn[9].onclick = function() { keyscr.innerHTML += "*";row.value += "9"};
		keyBtn[10].onclick = function() { keyscr.innerHTML += "*";row.value += "0"};
		keyBtn[11].onclick = function() { 
			keyscr.innerHTML = keyscr.innerHTML.substring(0,keyscr.innerHTML.length-1);
			row.value = row.value.substring(0,row.value.length-1);
		}; //backspace
		keyBtn[12].onclick = function() { keyscr.innerHTML += "*";row.value += "g"};
		keyBtn[13].onclick = function() { keyscr.innerHTML += "*";row.value += "w"};
		keyBtn[14].onclick = function() { keyscr.innerHTML += "*";row.value += "e"};
		keyBtn[15].onclick = function() { keyscr.innerHTML += "*";row.value += "r"};
		keyBtn[16].onclick = function() { keyscr.innerHTML += "*";row.value += "t"};
		keyBtn[17].onclick = function() { keyscr.innerHTML += "*";row.value += "y"};
		keyBtn[18].onclick = function() { keyscr.innerHTML += "*";row.value += "u"};
		keyBtn[19].onclick = function() { keyscr.innerHTML += "*";row.value += "i"};
		keyBtn[20].onclick = function() { keyscr.innerHTML += "*";row.value += "o"};
		keyBtn[21].onclick = function() { keyscr.innerHTML += "*";row.value += "p"};
		keyBtn[22].onclick = function() { keyscr.innerHTML += "*";row.value += "a"};
		keyBtn[23].onclick = function() { keyscr.innerHTML += "*";row.value += "s"};
		keyBtn[24].onclick = function() { keyscr.innerHTML += "*";row.value += "d"};
		keyBtn[25].onclick = function() { keyscr.innerHTML += "*";row.value += "f"};
		keyBtn[26].onclick = function() { keyscr.innerHTML += "*";row.value += "g"};
		keyBtn[27].onclick = function() { keyscr.innerHTML += "*";row.value += "h"};
		keyBtn[28].onclick = function() { keyscr.innerHTML += "*";row.value += "j"};
		keyBtn[29].onclick = function() { keyscr.innerHTML += "*";row.value += "k"};
		keyBtn[30].onclick = function() { keyscr.innerHTML += "*";row.value += "l"};
		keyBtn[31].onclick = function() 
		{ 
			keyboardpanel.style.display = 'none';
		};	//enter key
		keyBtn[32].onclick = function() { keyscr.innerHTML += "*";row.value += "z"};
		keyBtn[33].onclick = function() { keyscr.innerHTML += "*";row.value += "x"};
		keyBtn[34].onclick = function() { keyscr.innerHTML += "*";row.value += "c"};
		keyBtn[35].onclick = function() { keyscr.innerHTML += "*";row.value += "v"};
		keyBtn[36].onclick = function() { keyscr.innerHTML += "*";row.value += "b"};
		keyBtn[37].onclick = function() { keyscr.innerHTML += "*";row.value += "n"};
		keyBtn[38].onclick = function() { keyscr.innerHTML += "*";row.value += "m"};
		keyBtn[39].onclick = function() { keyscr.innerHTML += " ";row.value += " "};  //space
	}  	
//	pos1 = null; pos2 = null; pos3 = null; pos4 = null;
}

function register_login_changepassword_inputkeyboard_class()
{
	function appearKeyboard()
	{
		document.getElementsByClassName("keyboard")[0].style.top = '50%';
		document.getElementsByClassName("keyboard")[0].style.left = '50%';
		document.getElementsByClassName("keyboard")[0].style.transform = "translate(-50%, -50%)";
		document.getElementsByClassName("keyboard")[0].style.display = 'block';	
	}
	
	this.register_keyboard = function () 
	{
		document.getElementsByClassName('empregister')[0].onclick = function()
		{
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_inputText(this);
			appearKeyboard();
			keyboar = null;
		}
		document.getElementsByClassName('registerpassword')[0].onclick = function()
		{
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_inputPassword(this);
			appearKeyboard();
			keyboar = null;
		}
		document.getElementsByClassName('Re_registerpassword')[0].onclick = function()
		{
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_inputPassword(this);
			appearKeyboard();
			keyboar = null;
		}
		document.getElementsByClassName('AccessCode')[0].onclick = function()
		{
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_inputPassword(this);
			appearKeyboard();
			keyboar = null;
		}
	}
	
	this.login_keyboard = function () 
	{
		document.getElementsByClassName('emplogin')[0].onclick = function()
		{
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_inputText(this);
			appearKeyboard();
			keyboar = null;
		}
		document.getElementsByClassName('loginpassword')[0].onclick = function()
		{
			var keyboar = null;
			keyboar = new keyBoard();
			keyboar.keyBoard_inputPassword(this);
			appearKeyboard();
			keyboar = null;
		}
	}	
}
/////// key board class end

var clock = null;
var menu = null;
var buttons = null;
var ajx = null;
//var keyboard = null;

var logoutAuto = null;
	logoutAuto = new autoLogout();
	logoutAuto.autologout_action();
	logoutAuto = null;

setInterval
(
	function()
	{
		var autoDisplay = null;
		autoDisplay = new ajaxClass();//'',''
		//autoDisplay.autoDisplayOrderList('emp name', 'posistion');
		autoDisplay.autoDisplayOrderList('<?php echo $_POST['emplogin'];?>', '<?php echo $position;?>');
		autoDisplay = null;	
	},10000
);

clock = new myClock();
//keyboard = new keyBoard();
menu = new menu_bar();
buttons = new six_buttons();

clock.runClock();
//keyboard.keyBoard_action();

buttons.takeorderbutton_action();
buttons.printorderbutton_action();
buttons.clearorderbutton_action();
buttons.calculatorbutton_action();
buttons.menubutton_action();
buttons.orderorbutton_action();

menu.three_dot_menu_toggle_action();
menu.signout_action();
menu.shutdown_action();
//c: 39.5 free of 117 gb
//ajx = new ajaxClass();
//ajx.takeOrder();

//ajx = null;
 clock = null;
 menu = null;
 buttons = null;
 //logoutAuto = null

</script>
<?php
$position = null;

}
?>

</body>
<script>


function register_login_changepassword_toggle_class()
{
	this.register = function () 
	{
		document.getElementsByClassName('register')[0].onclick = function()
		{
			document.getElementById('HTMLRegisterError').innerHTML = '';
			document.getElementsByClassName('htmlLoginForm')[0].style.display = 'none';	
			document.getElementsByClassName('htmlRegisterForm')[0].style.display = 'block';	
		}
	}
	this.login = function () 
	{
		document.getElementsByClassName('login')[0].onclick = function()
		{
			document.getElementById('HTMLloginError').innerHTML = '';
			document.getElementsByClassName('htmlLoginForm')[0].style.display = 'block';	
			document.getElementsByClassName('htmlRegisterForm')[0].style.display = 'none';	
		}
	}
}
var register_login_changepassword_toggle = null;
register_login_changepassword_toggle = new register_login_changepassword_toggle_class();
register_login_changepassword_toggle.register();
register_login_changepassword_toggle.login();
register_login_changepassword_toggle = null;
</script>
</html> 