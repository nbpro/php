<html>
<head>
<script>
function verify(){
		if(document.registration.myname.value==""){
			alert("Please insert name");
			return false;
		}
		var str3=document.registration.myname.value;
		var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		for(i=0;i<str3.length;i++){
			if(valid.indexOf(str3.charAt(i))==-1){
				alert("please insert character only");
				return false;
			}
		}
		var num=document.registration.myage.value;
		if(num>60||num<18){
			alert("Please insert a valid age");
			return false;
		}
		if (document.registration.gender[0].checked==false&&document.registration.gender[1].checked==false){
			alert("Please select a gender");
			return false;
		}
		if (document.registration.lang1.checked==false&&document.registration.lang2.checked==false&&document.registration.lang3.checked==false){
			alert("Please select a language");
			return false;
		}
		if(document.registration.pass1.value==""){
			alert("Please insert a password");
			return false;
		}
		var str1=document.registration.pass1.value;
		var str2=document.registration.pass2.value;
		if(str1!=str2){
			alert("Password doesn't Matching");
			return false;
		}
		
}
			
</script>
</head>
<body bgcolor="cyan">
<form method = "post" action = "registrationaccount.php" name =registration>
<table>
<tr><td>Name</td>
	<td><input type = "text" name ="myname"></td></tr>
<tr><td>Age</td>
	<td><input type = "text" name ="myage"></td></tr>
<tr><td>Gender</td>
	<td><input type = "radio" name ="gender "value ="male">M
	<input type = radio name =gender value =female>F</td></tr>
<tr><td>Language</td>
	<td><input type = "checkbox" name ="lang1" value ="hindi">Hindi
	<input type = "checkbox" name =lang2 value ="english">English
	<input type = "checkbox" name =lang3 value ="bengoli">Bengoli</td></tr>
	
<tr><td>User Name</td>
	<td><input type = text name =uname></td></tr>
<tr><td>Password</td>
	<td><input type = password name =pass1></td></tr>
<tr><td>Confirm Password</td>
	<td><input type = password name =pass2></td></tr>
<tr><td><input type = submit value =Submit onclick="return verify(registration);"></td>
	<td><input type = submit value =clear></td></tr>
</table>
</form>
</body>
</html>



