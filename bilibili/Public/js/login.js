  function reImg(){
		var img = document.getElementById('code');
		img.src = verifyURL + '/' + Math.random();
}
  function display(){
    var img = document.getElementById('code');
    img.style.display = 'inline';
}
function checkphone(){
  var myphone = document.getElementById('zh').value;
  var myDivphone  = document.getElementById('checkphone');
  if(myphone!=""){
    var reg = /^1[0-9]{10}$/;
    if(!reg.test(myphone)){
      myDivphone.innerHTML = "请输入正确的手机号";
      return false;
    }else{
      myDivphone.innerHTML = "";
      return true;
    }
  }else{
    myDivphone.innerHTML = "请输入正确的手机号";
    return false;
  }
}
function checkpass(){
  var mypass = document.getElementById('mi').value;
  var myDivpass  = document.getElementById('checkpass');
  if(mypass!=""){
    if(mypass.length<5){
      myDivpass.innerHTML = "请输入正确的密码";
      return false;
    }else if(mypass.length>30){
      myDivpass.innerHTML = "请输入正确的密码";
      return false;
    }else{
      myDivpass.innerHTML = "";
      return true;
    }
  }else{
    myDivpass.innerHTML = "请输入正确的密码";
    return false;
  }
}
function check(){
  if(checkphone()){
    if(checkpass()){
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}