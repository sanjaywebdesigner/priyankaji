window.addEventListener("load",gg);
function gg()
{
	a=document.querySelectorAll("input");
	b=a.length;
	c=b-1;
		a[c].addEventListener("click",ss);

}
		function ss()
		{
			h=0;
			a=document.querySelectorAll("input");
			d=a.length-2;
			for(i=0;i<d;i++)
				{
				h=h+Number(a[i].value);	
				}
			
			a[d].value=h;
		}
		
