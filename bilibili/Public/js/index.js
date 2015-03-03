function codefans(){
    document.getElementById('block').style.display = 'none';
}
        
$(document).ready(function(){
    $('.headimg').mouseover(function(){
        $('#block').css('display','block');
    });
    $('.headimg').mouseover(function(){
        setTimeout('codefans()',2000);
    });
});