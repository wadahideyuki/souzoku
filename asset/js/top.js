$(function(){
	var cnt = 0;
	var cnt2 = 9;//画像の数-1
var el = $(".main-ex li")
	function mainChange(){
		if(cnt < cnt2){
			$(el).eq(cnt).removeClass("show");
			$(el).eq(cnt+1).addClass("show");
			cnt ++;
		}else{
			cnt = 0;
			$(el).removeClass("show");
			$(el).eq(cnt+1).addClass("show");
		}
	}//mainChange() End

//自動切替
	function startSlide(){
		timerId = setInterval(function(){	mainChange();}, 4000);
	};//startSlide()end
	startSlide();
/*-- /メインイメージ切り替え --*/
})