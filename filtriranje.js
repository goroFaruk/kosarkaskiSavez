function filtriraj()
{
	var trenutniVakat = new Date();
	var listaVijesti = document.getElementsByTagName("time");
	var clanci = document.getElementsByClassName("clanak");
	
	if(document.getElementById('danas').checked)
	{
		for (var j = 0; j < listaVijesti.length; j++)
		{
			if(clanci[j].style.display == "none")
			{
				clanci[j].style.removeProperty('display');
			}
		}
		for (var i = 0; i < listaVijesti.length; i++) 
		{
			var d = listaVijesti[i].getAttribute("pubdate");
			var datum = new Date(d);
			if(trenutniVakat.getDate()==datum.getDate() && trenutniVakat.getMonth()==datum.getMonth() && trenutniVakat.getFullYear()==datum.getFullYear())
			{
				listaVijesti[i].style.removeProperty('display');
			}
			else 
			{
				clanci[i].style.display = "none";
			}
		}
	}
	else if(document.getElementById('sedmica').checked)
	{
		for (var j = 0; j < listaVijesti.length; j++)
		{
			if(clanci[j].style.display == "none")
			{
				clanci[j].style.removeProperty('display');
			}
		}
		for (var i = 0; i < listaVijesti.length; i++) 
		{
			var d = listaVijesti[i].getAttribute("pubdate");
			var datum = new Date(d);
			if(trenutniVakat.getMonth()==datum.getMonth() && trenutniVakat.getFullYear()==datum.getFullYear() && trenutniVakat.getDate()<trenutniVakat.getDay())
			{
				listaVijesti[i].style.removeProperty('display');
			}
			else 
			{
				clanci[i].style.display = "none";
			}
		}
	}
	else if (document.getElementById('mjesec').checked)
	{
		for (var j = 0; j < listaVijesti.length; j++)
		{
			if(clanci[j].style.display == "none")
			{
				clanci[j].style.removeProperty('display');
			}
		}
		for (var i = 0; i < listaVijesti.length; i++) 
		{
			var d = listaVijesti[i].getAttribute("pubdate");
			var datum = new Date(d);
			if(trenutniVakat.getMonth()==datum.getMonth() && trenutniVakat.getFullYear()==datum.getFullYear() &&(trenutniVakat.getDate()-datum.getDate())<30)
			{
				listaVijesti[i].style.removeProperty('display');
			}
			else
			{
				clanci[i].style.display="none";
			}
		}
	}
	else if (document.getElementById('sve').checked)
	{
		for (var i = 0; i < listitems.length; i++) 
		{
			listaVijesti[i].style.removeProperty('display');
		}
	}
}