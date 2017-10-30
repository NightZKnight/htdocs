function myF2(form)
{
	var fn = "First name:	" + form.FN.value +"\n";
	var ln = "Last name:	" +form.LN.value + "\n";
	var msg= "Email:		"  +form.MSG.value + "\n";
	var popup=confirm("This is what you entered\n\n" + fn + ln + msg);
	if(popup==true)
	{
		var popup2=confirm("Are you sure?")
		if(popup2==false)
		{
			window.location="default.html"
		}
	}
	else
	{
		window.location="default.html"
	}
}