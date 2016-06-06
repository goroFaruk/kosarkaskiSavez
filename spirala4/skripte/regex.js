function regex ()
{
	var imePrezime = document.getElementById('ImeIPrezime').value;
	var reg = /[A-Z]\s[A-Z]/igm;
	
	if(reg.test(imePrezime)==false)
	{
		alert("Pogrešan format za Ime i Prezime");
		return false;
	}
}

function boje ()
{
	var element = document.getElementById("ImeIPrezime");
	var podatak = document.getElementById('ImeIPrezime').value;
	var element2 = document.getElementById('E-Mail');
	var podatak2 = document.getElementById('E-Mail').value;
	var element3 = document.getElementById('BrojTel');
	var podatak3 = document.getElementById('BrojTel').value;
	
	var reg = /[A-Z]\s[A-Z]/igm;
	var reg2 = /^[A-Z0-9._%+-]+@[gmail|hotmail|live]+\.[com]{3}$/igm;
	var reg3 = /^[0]{1}[6]{1}[1|2]{1}[-]{1}[0-9]{3}[-]{1}[0-9]{3}$/igm;
	
	if(!(reg.test(podatak)))
	{
		element.style.color = "red";
	}
	else element.style.removeProperty('color');
	
	if(!(reg2.test(podatak2)))
	{
		element2.style.color = "red";
		element3.removeAttribute("placeholder");		
	}
	else{ 
		element2.style.removeProperty('color');
		if(podatak3=="")
			element3.setAttribute("placeholder","Broj nije obavezan");
	}
	if(!(reg3.test(podatak3)))
	{
		element3.style.color= "red";		
		element2.removeAttribute("placeholder");
	}
	else{ 
		element3.style.removeProperty('color');
		 if(podatak2=="")
			element2.setAttribute("placeholder","Email nije obavezan");

	}

}