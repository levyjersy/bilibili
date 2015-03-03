function $(element){
	// 获取 DOM 对象的短写，如果你在用 jQuery 也可以采用类似的方法
	return document.getElementById(element);
};

window.addEventListener('load', function(){
	// 在窗体载入完毕后再绑定
	var CM = new CommentManager($('my-comment-stage'));
	CM.init();
	
	// 先启用弹幕播放（之后可以停止）
	CM.start();	
	$('sending').addEventListener('click', function(e){
		e.preventDefault(); // 抑制默认操作
		var danmaku = {
			"mode":1,
			"text":"Hello CommentCoreLibrary",
			"stime":1000,
			"size":30,
			"color":0xff0000
		};
		CM.insert(danmaku);
	});
	
	
	
	// 开放 CM 对象到全局这样就可以在 console 终端里操控
	window.CM = CM;
});
