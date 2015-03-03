  function a1()
    {document.getElementById('jian').style.background='rgb(204,225,255)'}
    function b1()
    {document.getElementById('jian').style.background='rgb(248,248,248)'}
    function a2()
    {document.getElementById('lun').style.background='rgb(204,225,255)'}
    function b2()
    {document.getElementById('lun').style.background='rgb(248,248,248)'}
    function a3()
    {document.getElementById('qi').style.background='rgb(204,225,255)'}
    function b3()
    {document.getElementById('qi').style.background='rgb(248,248,248)'}
    function onc()
    {document.getElementById('hid').style.display='inline'
     document.getElementById('resu').style.visibility='hidden'}
function codefans1(){
    document.getElementById('hide1').style.display = 'none';
}
function codefans2(){
    document.getElementById('hide2').style.display = 'none';
}
function check1(){
    var words1 = document.getElementById('words1').value;
    var hide1 = document.getElementById('hide1');
    if(words1!=''){
        if(words1.length<=4 || words1.length>1000){
            hide1.style.display = 'block';
            setTimeout('codefans1()',1000);
            return false;
        }else{
            return true;
        }
    }else{
        hide1.style.display = 'block';
        setTimeout('codefans1()',1000);
        return false;
    }
}
$(document).ready(function(){
    var words2 = $('#words2');
    var remarkable2 = $('#remarkable2');
    remarkable2.click(function(){
        $('#hide2').css('display','block');
        setTimeout('codefans2()',1000);
        words2.val('');
    });
    var content = $('#words1');
    var pid = $('#pid');
    var remarkable1 = $('#remarkable1');
    remarkable1.click(function(){
        if(content.val().length>=4 && content.val().length<1000){
                $.post(handleUrl, {content : content.val(), pid : pid.val()}, 
                function (data) {
                if (data.status) {
                    var str = '<div class="rv">';
                        str += '<div class="pic1"><img src="' + data.image + '"/></div>';
                        str += '<div class="floor">#' + data.id + '</div>';
                        str += '<div class="username"><a href="" id="usersname">' + data.username + '</a></div>';
                        str += '<div class="say">' + data.content + '</div>';
                        str += '<div class="bt">'+ data.creat_time + '<div class="move">';
                        str += '<a href="" id="click">回复</a></div></div></div>';     
                    $('#main').prepend(str);
                    content.val('');
                }else{
                    alert('发布失败');
                }
            },'json');
        }else{
            $('#hide1').css('display','block');
            setTimeout('codefans1()',1000);
            content.val('');
        }
    });
    var barrage = $('#users');
    var sending = $('#sending');
    sending.click(function(){
        if(barrage.val() != ''){
                $.post(barrageUrl, {content : barrage.val()}, 
                function (data) {
                if (data.status) {
                    var str2 = '<div id="barrage">';
                        str2 += '<span class="content">'+ data.content +'</span>';
                        str2 += '<span class="sendtime">'+ data.sendtime +'</span></div>';
                    $('#main2').append(str2);
                    barrage.val('');   
                }else{
                    alert('发布失败');
                }
            },'json');
        }
    });
});
