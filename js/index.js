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
function updatelength(field, output){
    curr_length = document.getElementById(field).value.length;
    field_mlen = document.getElementById(field).maxLength;
    document.getElementById(output).innerHTML = curr_length+'/'+field_mlen;
    return 1;
}
function validateForm(){
var name = document.forms["locmart"]["name"].value;
var sname = document.forms["locmart"]["sname"].value;
var add = document.forms["locmart"]["add"].value;
var email = document.forms["locmart"]["email"].value;
var name_error=sname_error=add_error=email_error="";
var count=0;
if(name === "")
{
	count++;
	name_error="Name cannot be empty";
	document.getElementById('name_error').innerHTML = name_error;
}
else if( name.match(/[\.0-9a-zA-Z]+/gi) != name )
{
	count++;
	name_error="Only letters,numbers and dots are allowed";
	document.getElementById('name_error').innerHTML = name_error;
}
else
{
	name_error="";
	document.getElementById('name_error').innerHTML = name_error;
}
if(sname === "")
{
	count++;
	sname_error="Shop Name cannot be empty";
	document.getElementById('sname_error').innerHTML = sname_error;
}
else if( sname.match(/[\.0-9a-zA-Z]+/gi) != sname )
{
	count++;
	sname_error="Only letters,numbers and dots are allowed";
	document.getElementById('sname_error').innerHTML = sname_error;
}
else
{
	sname_error="";
	document.getElementById('sname_error').innerHTML = sname_error;
}
if(add === "")
{
	count++;
	add_error="Address cannot be empty";
	document.getElementById('add_error').innerHTML = add_error;
}
if(email === "")
{
	count++;
	email_error="Email id cannot be empty";
	document.getElementById('email_error').innerHTML = email_error;
}
else if( email.match(/[\.0-9a-zA-Z]{6,30}@[a-zA-Z0-9]+\.[a-zA-Z]+/gi) != email )
{
	count++;
	email_error="Email id is invalid";
	document.getElementById('email_error').innerHTML = email_error;
	console.log(email.match(/[\.0-9a-zA-Z]{6,30}@[a-zA-Z0-9]+\.[a-zA-Z]+/gi));
}
else
{
	email_error="";
	document.getElementById('email_error').innerHTML = email_error;
}
if(count!=0)
{
	return false;
}
else
{
	return true;
}
}
function emptysuccess(){
	document.getElementById('success').innerHTML=""; 
}