function pageLoad() { //プリロード
    for (var rows = "", i = 0; i < document.images.length; i++) {
        var img = document.images[i]; // 画像の参照を取得
		$("<img>").attr("scr",img.src);
    }
	setInterval("jikan()",1000)<!--onload属性にタイマーをセット-->


}




$(function(){
	$("#moushikomi").submit(function(){
	
		//エラーの初期化
		$("p.error").remove();
		$("dl dd").removeClass("error");
		var zip_fulg = 0;
		var tel_fulg = 0;
		var barth_fulg = 0;
		$("input[type='text'].validate,textarea.validate").each(function(){
			
			//必須項目のチェック
			if($(this).hasClass("required")){
				if($(this).val()==""){
					$(this).parent().prepend("<p class='error'>必須項目です</p>");
				}
			}
			
				//必須項目のチェックzip1
				if($(this).hasClass("required2")){
					if($(this).val()==""){
						$(this).parent().prepend("<p class='error'>必須項目です</p>");
						var zip_fulg = 1;
					}
					else {
						var zip_fulg = 2;
					}
				}
				//必須項目のチェックzip2
				if($(this).hasClass("required3")){
					if($(this).val()=="" && zip_fulg == 1){
						$(this).parent().prepend("<p class='error error2'>必須項目です</p>");
					}
					else if($(this).val()=="" && zip_fulg == 2){
						$(this).parent().prepend("<p class='error'>必須項目です</p>");	
					}
				}
				
				//必須項目のチェックtel1
				if($(this).hasClass("required4")){
					if($(this).val()==""){
						$(this).parent().prepend("<p class='error'>必須項目です</p>");
						var tel_fulg = 1;
					}
					else {
						var tel_fulg = 2;
					}
				}
				//必須項目のチェックtel2
				if($(this).hasClass("required5")){
					if($(this).val()=="" && tel_fulg == 1){
						$(this).parent().prepend("<p class='error error2'>必須項目です</p>");
					}
					else if($(this).val()=="" && tel_fulg == 2){
						$(this).parent().prepend("<p class='error'>必須項目です</p>");	
						var tel_fulg = 1;
					}
				}
				//必須項目のチェックtel3
				if($(this).hasClass("required6")){
					if($(this).val()=="" && tel_fulg == 1){
						$(this).parent().prepend("<p class='error error2'>必須項目です</p>");
					}
				}
				
				//必須項目のチェックbarth1
				if($(this).hasClass("required7")){
					if($(this).val()==""){
						$(this).parent().prepend("<p class='error'>必須項目です</p>");
						var barth_fulg = 1;
					}
					else {
						var barth_fulg = 2;
					}
				}
				//必須項目のチェックbarth2
				if($(this).hasClass("required8")){
					if($(this).val()=="" && barth_fulg == 1){
						$(this).parent().prepend("<p class='error error2'>必須項目です</p>");
					}
					else if($(this).val()=="" && barth_fulg == 2){
						$(this).parent().prepend("<p class='error'>必須項目です</p>");	
						var barth_fulg = 1;
					}
				}
				//必須項目のチェックbarth3
				if($(this).hasClass("required9")){
					if($(this).val()=="" && barth_fulg == 1){
						$(this).parent().prepend("<p class='error error2'>必須項目です</p>");
					}
				}
			
			//数値のチェック
			if($(this).hasClass("number")){
				if(isNaN($(this).val())){
					$(this).parent().prepend("<p class='error'>数値のみ入力可能です</p>");
				}
			}
			
			//メールアドレスのチェック
			if($(this).hasClass("email1")){
				if($(this).val() && !$(this).val().match(/.+@.+\..+/g)){
					$(this).parent().prepend("<p class='error'>メールアドレスの形式が異なります</p>");
				}
			}
			
			//メールアドレス確認のチェック
			if($(this).hasClass("email1_check")){
				if($(this).val() && $(this).val()!=$("input[name="+$(this).attr("name").replace(/^(.+)_check$/, "$1")+"]").val()){
					$(this).parent().prepend("<p class='error'>メールアドレスと内容が異なります</p>");
				}
			}
			
		});
		
		//ラジオボタンのチェック
		$("input[type='radio'].validate.required").each(function(){

			if($("input[name="+$(this).attr("name")+"]:checked").length == 0){
				$(this).parent().prepend("<p class='error'>選択してください</p>");
			}
		});
		
		//チェックボックスのチェック
		$(".checkboxRequired").each(function(){
			if($(":checked",this).length==0){
				$(this).prepend("<p class='error'>選択してください</p>");
			}
		});
		
		// その他項目のチェック
		$(".validate.add_text").each(function(){
			if($(this).prop("checked") && $("input[name="+$(this).attr("name").replace(/^(.+)$/, "$1_text")+"]").val()==""){
				$(this).parent().prepend("<p class='error'>その他の項目を入力してください。</p>");
			}
		});
		
//会員登録しての注文のチェック
    var formElem1 = document.getElementById("moushikomi");    		
			if(formElem1.chumon[1].checked == true){
				$("input[type='password'].validate").each(function(){			
					//必須項目のチェック
					if($(this).hasClass("required")){
						if($(this).val()==""){
							$(this).parent().prepend("<p class='error'>パスワードが入力されていません</p>");
						}
					}
			
				});			
				//ラジオボタンのチェック
				$("input[type='radio'].validate.required99").each(function(){
		
					if($("input[name="+$(this).attr("name")+"]:checked").length == 0){
						$(this).parent().prepend("<p class='error'>選択してください</p>");
					}
				});
				//セレクトメニューのチェック
						$(".selectboxRequired").each(function(){
							if($(":selected",this).length!=3){
								$(this).prepend("<p class='error'>選択してください</p>");
							}
						});
			
			}
			
/*    var formElem1 = document.getElementById("moushikomi");    		
			if(formElem1.chumon[1].checked == true){
    var res = confirm("フォーム内容をリセットします。\nよろしいですか？");   
			
			}
*/
		
		
		//エラーの際の処理
		if($("p.error").length > 0){
			$('html,body').animate({
				scrollTop: $("p.error:first").offset().top-40
			}, 'slow');
			$("p.error2").remove();
			$("p.error").parent().addClass("error");
			return false;
		}
	});
});


