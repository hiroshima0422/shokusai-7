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
    <section class="top_2">
      <!-- ナビゲーションバー -->
      <nav class="navbar navbar-default navbar-fixed-top">
      
          <div class="boxA">
          	<div class="boxA-inner">
          		<div class="box1">
          			<div class="site">
          			<h1><img src="./img/shokuai_rogo.jpg" alt="hrc" width="150" height="75"></h1>
          			</div>
          		</div>
                <div class="box2">
                
                
                        <div id="overlay">
                            <div class="menu" id="menu">
                                <ul>
                                    <li>{!! link_to_route('index', 'トップ') !!}</li>
                                    <li>{!! link_to_route('kyujin', '求人') !!}</li>
                                    <li>{!! link_to_route('company', '協力企業') !!}</li>
                                    <li>{!! link_to_route('profile', '専門家ネットワーク') !!}</li>
                                    
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
<br><br><br><br>
        <div class="row">         			
          		
    </section>      			
 
    <section id="puppies" class="puppies" class="clearfix"
    
    <h2 class="prepare__title animated midashi_1">専門家ネットワーク</h2>
    <h2 class="prepare__title animated white moji_red bold">横浜　一郎氏</h2>
      <h4 class="puppies__phrase animated">○○○株式会社代表、△△△△</h4>
      <div class="showcase showcase--leftpic container-fluid tabs animated">
        <div class="box7">
<div class="box7-2-1">

	<article class="kiji">

	

	
	<img class="img-rounded img-responsive" src="img/thumbnail/pic_1.jpg" width="500" height="500" alt="横浜　一郎">

	

	</article>

</div>
<div class="box7-2-2">

	<aside class="sidemenu">
    <p>世界の大企業やアジア・太平洋における国家レベルのアドバイザーとして活躍のかたわら、グローバルな視点と大胆な発想で、活発な提言を行っている。経営コンサルタントとしても各国で活躍しながら、日本の疲弊した政治システムの改革と真の生活者主権の国家実現のために、新しい提案・コンセプトを提供し続けている。経営や経済に関する多くの著書が世界各地で読まれている。経済のボーダレス化に伴う企業の国際化の問題、都市の発展を中心として拡がっていく新しい地域国家の概念などについて、継続的に論文を発表している「ボーダレス経済学と地域国家論」提唱者。</p>


	<h2><i class="fa fa-caret-square-o-down"></i>【略歴】</h2>
	<ul>
	<li>ビジネス・ブレークスルー大学学長</li>
	<li>株式会社ビジネス・ブレークスルー代表取締役社長（株）</li>
	<li>（株）ジェネラル・サービシーズ（GSI）の創業者兼取締役</li>
	<li>アカデミー・キャピタル・インベストメンツ（ACI）IDTインターナショナルの取締役</li>
	<li>オーストラリアのボンド大学の評議員（Trustee）兼客員教授</li>
	</ul>
    <h2><i class="fa fa-caret-square-o-down"></i>【著書・イベント紹介】</h2>
	<ul>
    <li>「空気でお客様を動かす」フォレスト出版 2014年12月発売</li>
	<li>「空気で人を動かす」フォレスト出版 2014年5月発売</li>	
	<li>「絶対達成する決断力のつけ方」ダイヤモンド社　2013年5月発売</li>
	<li>「絶対達成マインドの作り方」ダイヤモンド社　2012年11月発売</li>
	</ul>
	</aside>

</div>
</div>
      </div><!--/.showcase -->
    </section><!--/.puppies -->

    <!-- フッター -->
    <footer>
      &copy; 2017 SHOKUAI
    </footer>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/vendor/jquery.waypoints.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/mobile-detect.min.js"></script>
    <script src="js/main.js"></script>
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