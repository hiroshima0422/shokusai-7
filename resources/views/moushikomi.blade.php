<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>SHOKUAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Webフォント -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/animate.css">
    <link rel="stylesheet" href="css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Marcellus">
    <link rel="stylesheet" href="css/main.css">
    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="img/favicon_2.png">
    <noscript>
      <!-- JavaScriptが無効化されている場合の追加スタイルシート -->
      <link rel="stylesheet" href="css/noscript.css">
    </noscript>
  </head>
  <body data-spy="scroll" data-target="#navbar">
  
  
    <section class="">
      <!-- ナビゲーションバー -->
      <nav class="navbar navbar-default navbar-fixed-top">
      
          <div class="boxA">
          	<div class="boxA-inner">
          		<div class="box1">
          			<div class="site">
          			<h1><a href="https://whitesnow-hiroshima.ssl-lolipop.jp/shokuai/index.php"><img src="./img/shokuai_rogo.jpg" alt="hrc" width="150" height="75"></a></h1>
          			</div>
          		</div>
                <div class="box2">
                
                
                        <div id="overlay">
                            <div class="menu" id="menu">
                                <ul>
                                    <li>{!! link_to_route('index', 'トップ') !!}</li>
                                    <li>{!! link_to_route('moushikomi', '求人') !!}</li>
                                    <li>{!! link_to_route('company', '協力企業') !!}</li>
                                    <li>{!! link_to_route('profile', '専門家ネットワーク') !!}</li>
                                    <li><a href="#">問合わせ・会員登録</a></li>
                                    <li>{!! link_to_route('welcome', 'つぶやき相談室') !!}</li>
                                </ul>
                            </div>
                        </div>
                    
                    <a class="menu-trigger" href="#"><span></span><span></span><span></span></a>
    			
          		</div>
          	</div>
          </div>
      </nav>

      
    </section>
    

<div class="container">
<br><br><br><br><br>
        <div class="row">   
        
        
        <?php
    
        /*if(isset($_SESSION['member_login'])==false)
        {
            print'<strong>ようこそ ゲスト様　';
            print'<a class = "mojiiro" href="member_login.php">会員ログイン</a><strong><br/>';

        }
        else
        {
            print'<strong>ようこそ ';
            print h(@$_SESSION['member_name']);
            print' 様　>';
            print'<a class = "mojiiro" href="member_logout.php">ログアウト</a><strong><br/>';
           
        }*/
    
    
            
    
        

   /* $goukei = 0;
        if(isset($_SESSION['cart_code'])==true)
        {	
        $cart_code = $_SESSION['cart_code'];
            //var_dump($cart_code);
        $cart_kazu = $_SESSION['cart_kazu'];
            //var_dump($kazu_kazu);
        $cart_count=count($cart_code);
            //var_dump($cart_code);
                $dsn = 'mysql:dbname=LAA0342708-pw6oy3;host=mysql602.phy.lolipop.jp';
                $user = 'LAA0342708';
                $password = '91av426c';
                $dbh=new PDO($dsn, $user, $password);
                $dbh->query('SET NAMES utf8');
                
            foreach($cart_code as $key => $val)
            {
                $sql = 'SELECT code,name, name2,price,gazou,gazou2,gazou3,gazou4,setumei,setumei_html,tani,kaishibi,shuuryoubi FROM mst_product WHERE code=?';
                $stmt = $dbh->prepare($sql);
                $data[0] = $val;
                $stmt->execute($data);
                
                $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    
                
                $pro_name[] = $rec['name'];
                $pro_price[] = $rec['price'];
                if($rec['gazou']=='')
                {
                    $pro_gazou[] = '';
                }
                else
                {
                    $pro_gazou[]= $rec['gazou'];
                }
                $pro_setumei[] = $rec['setumei'];
				$pro_setumei_html[] = $rec['setumei_html'];
            }
            
            $dbh = null;
            
                
                for($i=0;$i<$cart_count;$i++)
                    {
                        $goukei += $pro_price[$i]*$cart_kazu[$i];    
                    }
                          echo '<span><strong>カートの商品合計金額---</storong>'.h(@zei($goukei)).'円</span>';
           // print '<br/>';
            
        print '<form method="post" action="shop_cartlook.php">
   
    <input type="submit" id="botton"  value="カートを見る">
   
    </form><br/>
	<a class = "mojiiro" href="toriatukai_shouhin.php">商品一覧へ戻ります</a>';
        }
    else
    {
        $cart_count=0;
            print'カートに商品が入っていません。<br/>
			<a class = "mojiiro" href="toriatukai_shouhin.php">商品一覧へ戻ります</a>';
            //print'<br/>';
    }
    */
    
  ?>     
 
    


<script>
function seinengappi(){
	var nenbox = document.getElementById("nenbox").value;
	//var nen = document.getElementById("nen").value;	
	document.getElementById("nen").value = nenbox;
	//var shoukei1 = kazubox1 * 4000;
	
	var tukibox = document.getElementById("tukibox").value;
	//var tuki = document.getElementById("tuki").value;	
	document.getElementById("tuki").value = tukibox;
	//var shoukei2 = kazubox2 * 9500;
	
	var hibox = document.getElementById("hibox").value;
	//var hi = document.getElementById("hi").value;	
	document.getElementById("hi").value = hibox;
	//var shoukei3 = kazubox3 * 8000;
	
	//document.getElementById("nengappi").value =  nenbox + tukibox + hibox;
}
$(function(){
	$("form").submit(function(){
	
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
		</script>



		
        	<?php
			# エラーがあったら表示します。
			  if(isset($_SESSION['error'])) {
				foreach ($_SESSION['error'] as $value) {
				  echo '  <font color="red">' . h($value) . '</font><br />' . "\n";
				}
			  }
			?>
 
                             
             
			<h3>当サイトへのお問い合わせ・会員登録</h3>
            <p><span class = "aka">※</span>印は必須入力項目です。タグは無効化します。</p>
			<form  id = "otoiawase" action="moushikomi_kakunin.php" method="post">
			  
                  <dl>
                    <div class="box7">
                        <div class="box8-1">
                          <dt><label for="name">お名前：<span class = "aka">※</span></label></dt>
                        </div>
                        <div class="box8-2">
                          <dd><input  id = "name"  class="text_width" type="text" name="name" size="35" class="validate required" value="<?php echo h($name);?>" /></dd>
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                          <dt><label for="namefuri">フリガナ：<span class = "aka">※</span></label></dt>
                        </div>
                        <div class="box8-2">
                          <dd><input  id = "namefuri"  class="text_width" type="text" name="namefuri" size="35" class="" value="<?php echo h($namefuri);?>" /></dd>
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                          <dt><label for="zip">郵便番号：<span class = "aka">※</span></label></dt>
                        </div>
                        <div class="box8-2">
                                <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                            <dd><input type="text" name="zip21" size="4" maxlength="3" class="" value="<?php echo h($zip21);?>"> － <input type="text" name="zip22" size="5" maxlength="4" class="validate required3 number" value="<?php echo h($zip22);?>" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');"></dd>
            
            
                          <!--<dd><input type="text" name="zip1" id = "inputzip1" size="3" maxlength="3" class="validate required2 number" value="" > - <input type="text" name="zip2" id = "inputzip2" size="4" maxlength="4" class="validate required3 number" value="" ></dd>-->
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                        
                            <dt><label for="address_1">住所：<span class = "aka">※</span></label></dt>
                        </div>
                        <div class="box8-2">
                        <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
                            <dd><input type="text" name="addr21" size="35" value="<?php echo h($address_1);?>"></dd>
                           <!-- <dd><input type="text" name="address_1" size="35" id = "address_1"  class="validate required" value=""></dd> -->
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                            <dt><label for="address_2">住所２<span class = "aka">※</span></label><dt>
                        </div>
                        <div class="box8-2">
                           <dd><input type="text" name="address_2" size="35" class="validate required"  value="<?php echo h($address_2);?>"><br>
                           <p>例：５－６　横浜マンションＡ棟１０１号室</p></dd>
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                            <dt><label for="address_2_furi">住所２（フリガナ）<span class = "aka">※</span></label><dt>
                        </div>
                        <div class="box8-2">
                           <dd><input type="text" name="address_2_furi" size="35" class="validate required"  value="<?php echo h($address_2_furi);?>"><br>
                           <p>例：５－６　横浜マンションＡ棟１０１号室</p></dd>
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                            <dt><label for="tel">電話番号<span class = "aka">※</span></label></dt>
                        </div>
                        <div class="box8-2">
                           <dd><input type="text" name="tel1" size="4" maxlength="4" class="validate required4 number"  value="<?php echo h($tel1);?>" > - <input type="text" name="tel2" size="4" maxlength="4" class="validate required5 number"  value="<?php echo h($tel2);?>" > - <input type="text" name="tel3" size="4" maxlength="4" class="validate required6 number"  value="<?php echo h($tel3);?>" ></dd>
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                            <dt><label for="email">メールアドレス<span class = "aka">※</span></label></dt>
                        </div>
                        <div class="box8-2">
                           <dd><input type="text" size="35" name="email1" class="validate required email"  value="<?php echo h($email1);?>"></dd>
                        </div>
                    </div>
                    <div class="box7">
                        <div class="box8-1">
                            <dt>メールアドレス(確認)<span class = "aka">※</span></dt>
                        </div>
                        <div class="box8-2">
                           <dd><input type="text" size="35" name="email_check" class="validate required email email_check"></dd>
                        </div>
                    </div>
        		
       
             
					
					
					
                    
                    
                    
                    <dt>会員登録<span>※</span></dt>
                    <dd>					
                    <input type="radio" name="touroku" id="toiawase" value="toiawase" checked="checked"><label for="konkai">問い合わせ</label>
                    <input type="radio" name="touroku"  id="touroku" value="touroku"><label for="touroku">会員登録して問い合わせ</label>
                    </dd>
<br/>
<span class = "touroku">※</span>会員登録する方は以下の項目を入力してください。<br/>
                    <dt><label for="name">パスワードを８文字以上２０文字以内で入力してください。半角文字で aからzまでと AからZまでと 0から9までをお使いください。<span class = "touroku">※</span></label></dt>
					<dd><input type="password" name="pass" style="width:300px"  size="20" maxlength="20"class="validate required" >
                    </dd>
                    <dt><label for="name">パスワードをもう１度入力してください。<span class = "touroku">※</span></label></dt>
					<dd><input type="password" name="pass2" style="width:300px" size="20" maxlength="20" class="validate required" >
                    </dd>
					<dt>性別<span class = "touroku">※</span></dt>
					<dd>
						<input type="radio" value="男性" name="gender" id="man" class="validate required99"> <label for="man">男性</label>
						<input type="radio" value="女性" name="gender" id="woman"><label for="woman">女性</label>
					</dd>
                    <dt>生年月日<span class = "touroku">※</span></dt>
					
						<?php
# h()関数☆レシピ221☆（安全にブラウザで値を表示したい）を読み込みます☆レシピ041☆（他のファイルを取り込んで利用したい）。

//require_once '../../../../lib/h.php';

# 三項演算子☆レシピ025☆（「条件式 ? 式1 : 式2」って何ですか？）とisset()☆レシピ015☆（変数がセットされているかどうか調べたい）で未入力時のデフォルト値をセットします。

$year  = isset($_POST['year'])  ? $_POST['year']  : 0;
$month = isset($_POST['month']) ? $_POST['month'] : 0;
$day   = isset($_POST['day'])   ? $_POST['day']   : 0;

# 年月日が「0」でないことで、フォームがPOSTされたかどうか判定します。
if ($year !== 0 && $month !== 0 && $day !== 0) {
  if (checkdate($month, $day, $year)) {
    echo '<p>' . h($year) . '年' . h($month) . '月' . h($day) .
         '日は正しい日付です。</p>';
  } else {
    echo '<p>' . h($year) . '年' . h($month) . '月' . h($day) .
         '日は正しい日付ではありません。</p>';
  }
}

#現在の年を取得

$today = getdate();

$today_year = $today['year'];



?>
					
					<dd class="selectboxRequired">
					<?php echo '<select type="selectbox" id = "nenbox" name="barth1" size="4" maxlength="4" class="" onchange="seinengappi()"><label for="nenbox">年</label>' . "\n";
$start = date('Y') - 100;
$end   = date('Y');
for ($i = $end; $start <= $i; $i--) {
  echo '<option value="' . h($i) . '"';
  echo (($today_year-30) == $i) ? ' selected' : '';
  echo '>' . h($i) . '</option>' . "\n";
}
echo '</select>年' . "\n";
echo '<select type="selectbox" id = "tukibox" name="barth2" size="4" maxlength="4" class="validate required8 number" onchange="seinengappi()">' . "\n";
for ($i = 1; $i <= 12; $i++) {
  echo '<option value="' . h($i) . '"';
  echo ($month == $i) ? ' selected' : '';
  echo '>' . h($i) . '</option>' . "\n";
}
echo '</select>月' . "\n";
echo '<select type="selectbox" id = "hibox" name="barth3" size="4" maxlength="4" class="validate required9 number" onchange="seinengappi()">' . "\n";
for ($i = 1; $i <= 31; $i++) {
  echo '<option value="' . h($i) . '"';
  echo ($day == $i) ? ' selected' : '';
  echo '>' . h($i) . '</option>' . "\n";
}
echo '</select>日' . "\n";?>
　－－＞西暦<input type="text" id="nen" class = "seinengappi" value="0" size="4" disabled>年<input type="text" id="tuki" class = "seinengappi" value="0" size="2" disabled>月<input type="text" id="hi" class = "seinengappi" value="0" size="2" disabled>日 生まれ                   
                    </dd>
                    
					

			            
			<dt><label for="comment">お問い合わせ内容(500文字以内)</label></dt>
					<dd>
                    	
						<textarea id="comment" name="comment"rows="10" cols="60" value="<?php echo h($comment);?>"></textarea>
					</dd>
                    
       
					
                    
                    
				</dl>
                
                <!--<input type="hidden" name="token" value="<?php /*echo h($token);*/ ?>">-->
				<input id="check" type="submit" name="submit" value="入力内容チェック" />


  </form>
		</div>
           </div>
         
   


    <!-- フッター -->
    <footer>
      &copy; 2017 SHOKUAI
    </footer>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/vendor/jquery.waypoints.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/mobile-detect.min.js"></script>
    <script src="js/ajaxzip3.js" charset="UTF-8"></script>
    <script src="js/main.js"></script>
    <script src="js/func.js"></script>
    <script type="text/javascript">
	 $(function(){
		 $('.menu-trigger').on('click', function() {
			 $(this).toggleClass('active');
			 $("#overlay").fadeToggle();
			 return false;
		 });
	 });
	</script>    
  </body>
</html>
