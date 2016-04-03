onload=function novosti()
{	
	var trenutniVakat = new Date();
	var dan = trenutniVakat.getDate();
	var mjesec = trenutniVakat.getMonth()+1; 
	var godina = trenutniVakat.getFullYear();
	var sahat = trenutniVakat.getHours();
	var minutice = trenutniVakat.getMinutes();
	
	var ispis = document.getElementsByClassName("datumiObjave");
	for(var i = 0; i<ispis.length;i++)
	{
		var a = ispis[i].getAttribute("pubdate");
		var ispis_vakta = new Date(a);
		if(godina - ispis_vakta.getFullYear() == 0)
		{
			if(mjesec - (ispis_vakta.getMonth()+1) ==0 )
			{
				if (sahat - ispis_vakta.getHours() == 0)
				{
					if(minutice - ispis_vakta.getMinutes() == 0)
					{
						document.getElementsByClassName("datumiObjave")[i].innerHTML=" par sekundi";
					}
					else if(minutice-ispis_vakta.getMinutes()<5)
							document.getElementsByClassName("datumiObjave")[i].innerHTML= " prije " +(minutice-ispis_vakta.getMinutes())+ +" minute";
					else 
						document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije " +(minutice-ispis_vakta.getMinutes()) +" minuta";
				} 
				else if(dan-ispis_vakta.getDate()>=1 && dan-ispis_vakta.getDate()<2)
					{
					
						if(sahat-ispis_vakta.getHours()<0)
						{
							if(sahat+(24-ispis_vakta.getHours())==1 || sahat+(24-ispis_vakta.getHours())==21) 
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat+(24-ispis_vakta.getHours()))+" sat";
							else 
								if((sahat+(24-ispis_vakta.getHours())>1 && sahat+(24-ispis_vakta.getHours())<5) || (sahat+(24-ispis_vakta.getHours())>21 && sahat+(24-ispis_vakta.getHours())<24))
							{
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat+(24-ispis_vakta.getHours()))+" sata";
							}
							else if(sahat+(24-ispis_vakta.getHours())>4 && hh+(24-ispis_vakta.getHours())<20)
								{
									document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat+(24-ispis_vakta.getHours()))+" sati";
								}
						}
						else 
						{
							document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(dan-ispis_vakta.getDate())+" dan";
						}
					}
				else 
				{
						if(minutice-ispis_vakta.getMinutes()<0)
						{
							document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(minutice+(60-ispis_vakta.getMinutes())) +"minuta";
						}
						else
							if(minutice-ispis_vakta.getMinutes()>0 && sahat-ispis_vakta.getHours()==1)
							{
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat-ispis_vakta.getHours())+"sat";
							}
							else if(sahat-ispis_vakta.getHours()>1 && sahat-ispis_vakta.getHours()<5)
							{
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat-ispis_vakta.getHours())+" sata";
							}
							else if(sahat-ispis_vakta.getHours()>=5 && sahat-ispis_vakta.getHours()<21)
							{
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat-ispis_vakta.getHours())+" sati";
							}
							else if(sahat-ispis_vakta.getHours()==21)
							{
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat-ispis_vakta.getHours())+" sat";
							}
							else if(sahat-ispis_vakta.getHours()>21 && sahat-ispis_vakta.getHours()<=24)
							{
								document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(sahat-ispis_vakta.getHours())+" sata";
							}
				}
				
			}
			else if(minutice-(ispis_vakta.getMonth()+1)==1)
			{
				if((30+dan)-ispis_vakta.getDate()>=2 && (30+dan)-ispis_vakta.getDate()<7)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+((30+dan)-ispis_vakta.getDate())+ " dan";
				}
				else if((30+dan)-ispis_vakta.getDate()>=7 && (30+dan)-ispis_vakta.getDate()<14)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(1)+" sedmicu";
				}
				else if((30+dan)-ispis_vakta.getDate()>=14 && (30+dan)-ispis_vakta.getDate()<21)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(2)+ " sedmice";
				}
				else if((30+dan)-ispis_vakta.getDate()>=21 && (30+dan)-ispis_vakta.getDate()<28)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(3)+" sedmice";
				}
				else if(dan-ispis_vakta.getDate()==28)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(4)+ " sedmice";
				}
				else if(dan-ispis_vakta.getDate()>=2 && dan-ispis_vakta.getDate()<7)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(dan-ispis_vakta.getDate())+" dana";
				}
				else if(dan-ispis_vakta.getDate()>=7 && dan-ispis_vakta.getDate()<14)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(1)+" sedmicu";
				}
				else if(dan-ispis_vakta.getDate()>=14 && dan-ispis_vakta.getDate()<21)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(2) + "sedmice";
				}
				else if(dan-ispis_vakta.getDate()>=21 && dan-ispis_vakta.getDate()<29)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije "+(3)+ " sedmice";
				}
				else if(dan-ispis_vakta.getDate()==28)
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=" prije"+(4)+ " sedmice";
				}
				else 
				{
					document.getElementsByClassName("datumiObjave")[i].innerHTML=ispis_(ispis_vakta.getDate(), ispis_vakta.getMonth()+1, ispis_vakta.getFullYear());	
				}
			}
			else 
			{
				document.getElementsByClassName("datumiObjave")[i].innerHTML=ispis_(ispis_vakta.getDate(), ispis_vakta.getMonth()+1, ispis_vakta.getFullYear());	
			}
		}
		else 
		{
			document.getElementsByClassName("datumiObjave")[i].innerHTML=ispis_(ispis_vakta.getDate(), ispis_vakta.getMonth()+1, ispis_vakta.getFullYear());	
		}

												
	}
}



function ispis_(a,b,c)
{
	return a+"-"+b+"-"+c;
}