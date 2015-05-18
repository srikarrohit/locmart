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


function imagechange1(){
  var src1 = document.getElementById("img21").src;
	console.log(src1);
  if(src1 === "http://localhost/locmart/img/list.png")
  {
    document.getElementById("img21").src = "http://localhost/locmart/img/tracking.png";
		console.log(1);
  }
	else if(src1 === "http://localhost/locmart/img/tracking.png")
  {
    document.getElementById("img21").src = "http://localhost/locmart/img/open.png";
		console.log(2);
  }
	else if(src1 === "http://localhost/locmart/img/open.png")
  {
    document.getElementById("img21").src = "http://localhost/locmart/img/list.png";
		console.log(3);
  }
}
setInterval(function(){ imagechange1()},1000);

