window.addEventListener("load",gg);
function gg()
{
	a=document.querySelectorAll("input");
		a[3].addEventListener("click",ss);
		a[4].addEventListener("click",ss1);
		a[5].addEventListener("click",ss2);
		a[6].addEventListener("click",ss3);
}
		function ss()
		{
			a=document.querySelectorAll("input");
			b1=Number(a[0].value);
			b2=Number(a[1].value);
			a[2].value=b1+b2;
		}
		function ss1()
		{
			a=document.querySelectorAll("input");
			b1=Number(a[0].value);
			b2=Number(a[1].value);
			a[2].value=b1-b2;
		}
		function ss2()
		{
			a=document.querySelectorAll("input");
			b1=Number(a[0].value);
			b2=Number(a[1].value);
			a[2].value=b1*b2;
		}
		function ss3()
		{
			a=document.querySelectorAll("input");
			b1=Number(a[0].value);
			b2=Number(a[1].value);
			a[2].value=b1/b2;
		}
