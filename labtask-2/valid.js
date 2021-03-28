function valid ()
{
	var name = document.getElementById("name");
	var id = document.getElementById("id");
	var cgpa= document.getElementById("cgpa");
	var credit = document.getElementById("credit");
	var dept_id = document.getElementById("dept_id");



	if (uname.value.trim()=="")
	{
		alert("username is Blank");
		username.style.border = "solid 3px red"
		return false;
		
	}
	else if (name.value.trim().length<8)
	{
		alert("Username should be more than 6 letter");
		username.style.border = "solid 3px red"
		return fslse;
	}
	else if (id.value.trim()=="")
	{
		alert("Enter Your email");
		email_1.style.border = "solid 3px red"
		return false;	
	}
	else if (cgpa.value.trim()=="")
	{
		alert("Write something here");
		txtbox1.style.border = "solid 3px red"
		return false;
		
	}
	else if (name.value.trim().length<8)
	{
		alert("Username should be more than 6 letter");
		username.style.border = "solid 3px red"
		return fslse;
	}
	else if (dept_id.value.trim()=="")
	{
		alert("Write something here");
		txtbox1.style.border = "solid 3px red"
		return false;
		
	}
	else if (credit.value.trim()=="")
	{
		alert("Write something here");
		txtbox1.style.border = "solid 3px red"
		return false;
		
	}
	else if (name.value.trim().length<3)
	{
		alert("Username should be more than 6 letter");
		username.style.border = "solid 3px red"
		return fslse;
	}
	else
	{
		alert("Sucessfuly Send");
		 return true;

	}

}