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
    <section>
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
 
    <section id="puppies" class="puppies">
    <h2 class="prepare__title animated midashi_1">専門家ネットワーク</h2>
      <h2 class="puppies__title animated bold red">専門家紹介</h2>
      <div class="showcase showcase--leftpic container-fluid tabs animated">
        <div class="row">
          <!-- サムネイル -->
          <div class="pull-right col-xs-12 col-sm-6">
            <ul class="showcase__thumbnails tabs__menu">
              <li><a href="#puppies-1"><img class="img-rounded" src="img/thumbnail/pic_1.jpg" width="60" height="60" alt="横浜　一郎"></a></li>
              <li><a href="#puppies-2"><img class="img-rounded" src="img/thumbnail/pic_2.jpg" width="60" height="60" alt="金沢　美子"></a></li>
              <li><a href="#puppies-3"><img class="img-rounded" src="img/thumbnail/pic_3.jpg" width="60" height="60" alt="幸浦　秀夫"></a></li>
              <li><a href="#puppies-4"><img class="img-rounded" src="img/thumbnail/pic_4.jpg" width="60" height="60" alt="福浦　次男"></a></li>
            </ul><!--/.showcase__thumbnails -->
          </div><!--/.pull-right -->

          <!-- 拡大写真 -->
          <div class="tabs__content col-xs-12 col-sm-6">
            <section class="puppies-1">
              <img class="img-rounded img-responsive" src="img/thumbnail/pic_1.jpg" width="500" height="500" alt="横浜　一郎">
            </section>
            <section class="puppies-2">
              <img class="img-rounded img-responsive" src="img/thumbnail/pic_2.jpg" width="500" height="500" alt="金沢　美子">
            </section>
            <section class="puppies-3">
              <img class="img-rounded img-responsive" src="img/thumbnail/pic_3.jpg" width="500" height="500" alt="幸浦　秀夫">
            </section>
            <section class="puppies-4">
              <img class="img-rounded img-responsive" src="img/thumbnail/pic_4.jpg" width="500" height="500" alt="福浦　次男">
            </section>
          </div><!--/.tabs__content -->

          <!-- 説明文 -->
          <div class="tabs__content col-xs-12 col-sm-6">
            <section id="puppies-1">
              <div class="showcase__details">
              	<div class="box8">
                    <div class="bottonbox1">
                      <h3>横浜　一郎</h3>
                    </div>
                    <div class="bottonbox2">
                        <h3>{!! link_to_route('profile_shousai', '専門家詳細') !!}</h3>
                    </div>
                </div>
                <p class="showcase__kind-description">
                豊富な企業調査の経験を持つスペシャリスト。県の中小企業を15年余りにわたり見つめつづけた。企業財務をこよなく愛する。ユニークな語り口で難しいこともわかりやすく伝える、名物講師
                </p>
              </div>
            </section>
            <section id="puppies-2">
              <div class="showcase__details">
              	<div class="box8">
                    <div class="bottonbox1">
                      <h3>金沢　美子</h3>
                    </div>
                    <div class="bottonbox2">
                        <h3>{!! link_to_route('profile_shousai', '専門家詳細') !!}</h3>
                    </div>
                </div>
                
                <p class="showcase__kind-description">
                「人に本気でかかわる」をモットーとし、これまでに2,000社を超える企業の経営者と関わる。品質の高さを競う優秀レポーターとして名を連ね、そのインタビュー力の高さに定評がある

                </p>
              </div>
            </section>
            <section id="puppies-3">
              <div class="showcase__details">
              	<div class="box8">
                    <div class="bottonbox1">
                      <h3>>幸浦　秀夫</h3>
                    </div>
                    <div class="bottonbox2">
                        <h3>{!! link_to_route('profile_shousai', '専門家詳細') !!}</h3>
                    </div>
                </div>
                <p class="showcase__kind-description">
                「予材管理」という独自の新マネジメント手法を元に、仕組みによる現場の「見える化」のみならず、従業員の目標を達成させるため現場に入り込むコンサルタントとして活躍中
                </p>
              </div>
            </section>
            <section id="puppies-4">
              <div class="showcase__details">
              <div class="box8">
                    <div class="bottonbox1">
                      <h3>福浦　次男</h3>
                    </div>
                    <div class="bottonbox2">
                        <h3>{!! link_to_route('profile_shousai', '専門家詳細') !!}</h3>
                    </div>
                </div>
                
                <p class="showcase__kind-description">
                "専門用語を使わない経営支援"をモットーに、企業が抱える課題をその場で構造化・図解する支援スタイルに定評がある。
                </p>
              </div>
            </section>
          </div><!--/.tabs__content -->
        </div><!--/.row -->
      </div><!--/.showcase -->
    </section><!--/.puppies -->

 		</div><!--/.row -->
      </div><!--/.container -->
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


