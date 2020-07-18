window.addEventListener("load",gg);
function gg()
{
	a=document.querySelectorAll("input");
		a[7].addEventListener("click",ss);

}
		function ss()
		{
			a=document.querySelectorAll("input");
			b1=Number(a[0].value);
			if(isNaN(b1))
				{
					b1=0;
				}
			if(b1<0)
				{
					b1=0;
				}
			b2=Number(a[3].value);
			if(b2<0)
				{
					b2=-1*b2;
				}
			b3=Number(a[4].value);
			b4=Number(a[5].value);
			a[6].value=b1+b2+b3+b4;
		}
		
