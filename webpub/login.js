function check(form)/*function to check userid & password*/
{
var x='admin';
var y='author';
/*the following code checkes whether the entered userid and password are matching*/
if(form.uname.value == x && form.psw.value == x)
{
	window.open('admin.html')/*opens the target page while Id & password matches*/
}
else if(form.uname.value == y && form.psw.value == y)
{
	window.open('file.html')/*opens the target page while Id & password matches*/
}

else
{
	alert("Error in Password or Username")/*displays error message*/
} 
}
function app()
{
	window.open('searchmain.html')
}
function pub()
{
	window.open('pdfupload.html')
}