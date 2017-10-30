function ans(answer, ID)
{
	document.getElementById(ID).innerHTML=answer;
}

function time()
{
	dayName = new Array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	monName = new Array ("January","February","March","April","May","June","July","August","September","October","November","December");
	now = new Date;
	
	document.getElementById("time").innerHTML='Today is ' + dayName[now.getDay()] + ', ' + monName[now.getMonth()] + ' ' + now.getDate() + '.'	
}

function setCookie()
{
	username = document.myf.name.value;
	exd = new Date;
	exd.setMonth(exd.getDate()+6);
	
	document.cookie="username=" + username + ";expires=" + exd.toGMTString();
}

function getCookie(name)
{
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}

function reloadhtml(ID)
{
  var container = document.getElementById("ans1");
  var content = container.innerHTML;
	
  container.innerHTML= content;
}