function display(){
    var img = document.getElementById('code');
    img.style.display = 'inline';
}
function reImg(){
	var img = document.getElementById('code');
	img.src = verifyURL + '/' + Math.random();
}
function checkphone(){
	var myphone = document.getElementById('a1').value;
	var myDivphone  = document.getElementById('checkphone');
	if(myphone!=""){
		var reg = /^1[0-9]{10}$/;
		if(!reg.test(myphone)){
			myDivphone.innerHTML = "手机号格式错误";
			return false;
		}else{
			myDivphone.innerHTML = "";
			return true;
		}
	}else{
		myDivphone.innerHTML = "手机号格式错误";
		return false;
	}
}
function checkname(){
	var myname = document.getElementById('a3').value;
	var myDivname  = document.getElementById('checkname');
	if(myname!=""){
		if(myname.length<3){
			myDivname.innerHTML = "昵称不能小于3个字符";
			return false;
		}else if(myname.length>30){
			myDivname.innerHTML = "昵称不能大于30个字符";
			return false;
		}else{
			myDivname.innerHTML = "";
			return true;
		}
	}else{
		myDivname.innerHTML = "昵称不能小于3个字符";
		return false;
	}
}
function checkpass(){
	var mypass = document.getElementById('a4').value;
	var myDivpass  = document.getElementById('checkpass');
	if(mypass!=""){
		if(mypass.length<5){
			myDivpass.innerHTML = "密码不能小于5个字符";
			return false;
		}else if(mypass.length>30){
			myDivpass.innerHTML = "密码不能大于16个字符";
			return false;
		}else{
			myDivpass.innerHTML = "";
			return true;
		}
	}else{
		myDivpass.innerHTML = "密码不能小于6个字符";
		return false;
	}
}
function check(){
	if(checkphone()){
		if(checkname()){
			if(checkpass()){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return false;
	}
}
window.onload = function (){
	var checkbox = document.getElementById('checkbox');
	var register = document.getElementById('register');
	checkbox.onclick = function (){
		if(checkbox.checked){
			register.disabled = false;
			register.style.backgroundColor = 'rgb(0,160,218)'; 
		}else{
			register.disabled = 'disabled';
			register.style.backgroundColor = '';
		}
	}
}