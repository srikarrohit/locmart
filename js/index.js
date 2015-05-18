function imagechange(){
	var src1 = document.getElementById("img11").src;
	if(src1 === "http://localhost/locmart/img/page1_1.png")
	{
		document.getElementById("img11").src = "http://localhost/locmart/img/page1_2.png";
	}
	else
	{
		document.getElementById("img11").src = "http://localhost/locmart/img/page1_1.png";
	}	
}
setInterval(function(){ imagechange()},1000);
