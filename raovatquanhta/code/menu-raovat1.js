function openNav() {alert('open nav');
    document.getElementById("myNav").style.width = "150px";
}

function submit()
{
// fixed this line
var str = emp_name = password = password_cover = rightbottom = submit_notice = RBorder = RBpaid = null;
 emp_name = document.getElementById("emp_name").value;
 password = document.getElementById("password").value;
 password_cover = document.getElementById("password_cover");
 rightbottom = document.getElementById("rightbottom");
RBorder = document.querySelectorAll(".RBorder");
RBpaid = document.querySelectorAll(".RBpaid");

 submit_notice = document.getElementById("submit_notice");
	if(pausecontent.includes(emp_name) && pausecontent[pausecontent.indexOf(emp_name)+1] == password)
	{
		rightbottom.innerHTML = "";
		name = emp_name; 
		var i = null;
		i = orders[emp[name]].length -1;
		//alert(i);
		//for(var i = 0; i < orders[emp[name]].length;i++)
		//{
		if (i >= 0){
			str = orders[emp[name]][i].split("||");
			rightbottom.innerHTML = str[4];//alert(str[4]);
			}
			//rightbottom.innerHTML += orders[emp[name]][i];
			
		//}
		/*
		for(var itemsOfi=0;itemsOfi < RBorder.length; itemsOfi++){
			RBorder[itemsOfi].onclick=function(event){
				alert(this.id + "####******" );
				orderbuttonfunc(this.id, name);	
				
			}
			RBpaid[itemsOfi].onclick=function(event){
				//alert(this.id + "####" + RBlist.length);
				paidbuttonfunc(this.id);	
			}
			alert(RBorder.length +" " +itemsOfi);
		}*/
		submit_notice.innerHTML = '';
		password_cover.style.display = "none";
		document.getElementById("emp_name").value = '';
		document.getElementById("password").value = '';
		document.getElementById("Cemp").innerHTML = emp_name;
		document.getElementById("Ctime").innerHTML = "";
		blankdisplay();
	}
	else
	submit_notice.innerHTML = "INCORRECT USERNAME OR PASSWORD";
	
str = emp_name = password = password_cover = rightbottom = submit_notice = RBorder = RBpaid = null;
}
function signout(){
var password_cover = rightbottom = myNav = a = items = Ctracknum = null;
	items = document.getElementById("items");
	Ctracknum = document.getElementById("Ctracknum");
 password_cover = document.getElementById("password_cover");
 rightbottom = document.getElementById("rightbottom");
password_cover.style.display = "block";
    myNav = document.getElementsByClassName("overlay")[0]; 
   myNav.style.width = "0px";
    a = document.getElementsByClassName("a")[0];
   a.classList.toggle("change");
   rightbottom.innerHTML = "";
   items.innerHTML = "";
   Ctracknum.innerHTML = "";
 //password_cover = rightbottom = myNav = a = null;  
 password_cover = rightbottom = items = Ctracknum = null; 
}
function blankdisplay(){
document.getElementById("items").innerHTML = "";
document.getElementById("subtotal").innerHTML = "0.00";
document.getElementById("tax").innerHTML = "0.00";
document.getElementById("total").innerHTML = "0.00";
document.getElementById("cash").innerHTML = "0.00";
document.getElementById("credit").innerHTML = "0.00";
document.getElementById("change").innerHTML = "0.00";
document.getElementById("Ctime").innerHTML = "";
document.getElementById("Cordernumber").innerHTML = "";
//document.getElementById("rightbottom").innerHTML = "";
}

function orderbuttonfunc(id, name){
//alert(orders[emp[name]][parseInt(id) - 1]);
var str = null;
var p = null; var pOfi = null;
 str = orders[emp[name]][parseInt(id)].split("||");
document.getElementById("items").innerHTML = str[0];
document.getElementById("Ctime").innerHTML = str[1];
document.getElementById("Cordernumber").innerHTML = str[2];
document.getElementById("Ctracknum").innerHTML = str[3];
alert(id +" "+ name )
calculation_subtotal();
document.getElementById("change").innerHTML =  change(document.getElementById("cash").innerHTML, document.getElementById("credit").innerHTML,document.getElementById("total").innerHTML);

		
		p = document.querySelectorAll(".item");
	
		for(pOfi=0;pOfi < p.length; pOfi++){
			p[pOfi].onclick=function(event){
				printMousePos(event,this.id);
				voidfunc(this);
				addnotefunc(this);
				close();
			}}
delete1Darray(p);
str = null;
p = null;  pOfi = null;
}

function paidbuttonfunc(id){
//document.querySelectorAll(".RBlist")[parseInt(id)-1].style.display = "none";
var i = n = rightbottom = null;
n = document.querySelectorAll(".RBlist");

alert("padibuttonfunc "+id);
fadeOut(n[parseInt(id)]); 

    window.setTimeout(function(){
		i = orders[emp[name]].length -1;
		if (i >= 0){alert("i = " + i);rightbottom = document.getElementById("rightbottom");
			str = orders[emp[name]][i].split("||");
			//alert("4   "+str[4]);
			str[4] = rightbottom.innerHTML;
			//alert(rightbottom.innerHTML);
			orders[emp[name]][i] = str.join("||");
			//rightbottom.innerHTML = str[4];
			//alert(orders[emp[name]][i]);
			}
  },1000);

blankdisplay();
  i = n = rightbottom = null;

}

function delete2Darray(array){
	while(array.length)
	{
	
		while(array[array.length-1].length)
		{//alert(array[array.length-1])
		array[array.length-1].pop();
		}
	array[array.length-1] = null;
    //alert(array)
	array.pop();
	}
}
function delete1Darray(array){
	while(array.length)
	{//alert(array.length)
	array.pop();
	}
}

function deleteobj(obj)
{
	for ( var i in obj ) {
	obj[i] = null;
	if ( obj[i] === null ) {
        delete obj[i];
    }
	}
}

function shutdown(){

delete2Darray(menu);
menu = null;
delete2Darray(orders);
orders = null;
delete1Darray(pausecontent);
pausecontent = null;
deleteobj(emp);
emp = null;
name = null;
ordersnumber = null;
alert('shutdown');
}


 function fadeIn($element){
  $element.style.display="inline-block";
  $element.style.opacity=0;
  recurseWithDelayUp($element,0,1);
}
function fadeOut($element){
  $element.style.display="inline-block";
  $element.style.opacity=1;
  recurseWithDelayDown($element,1,0);
}

function recurseWithDelayDown($element,startFrom,stopAt){

    window.setTimeout(function(){
      if(startFrom > stopAt ){
          startFrom=startFrom - 0.1;
            recurseWithDelayDown($element,startFrom,stopAt)
            $element.style.opacity=startFrom;
      }else{
        $element.style.display="none";
		//$element.parentNode.removeChild($element);

      } 
  },50);
	
}
function recurseWithDelayUp($element,startFrom,stopAt){
    window.setTimeout(function(){
      if(startFrom < stopAt ){
          startFrom=startFrom + 0.1;
            recurseWithDelayUp($element,startFrom,stopAt)
            $element.style.opacity=startFrom;
      }else{
        $element.style.display="inline-block"
      } 
  },50);
}
/*
var foo = "I'm global";
var bar = "So am I";

function () {
    var foo = "I'm local, the previous 'foo' didn't notice a thing";
    var baz = "I'm local, too";

    function () {
        var foo = "I'm even more local, all three 'foos' have different values";
        baz = "I just changed 'baz' one scope higher, but it's still not global";
        bar = "I just changed the global 'bar' variable";
        xyz = "I just created a new global variable";
    }
}
*/