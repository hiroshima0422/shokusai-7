<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>SHOKUAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Webフォント -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/animate.css">
    <link rel="stylesheet" href="/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
	  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Marcellus">
    <link rel="stylesheet" href="/css/main.css">
    
   
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <section class="top">
      <!-- ナビゲーションバー -->
      <nav class="navbar navbar-default navbar-fixed-top">
      
          <div class="boxA">
          	<div class="boxA-inner">
          		<div class="box1">
          			<div class="site">
          			<h1><a href="#"><img src="./img/shokuai_rogo.jpg" alt="hrc" width="150" height="75"></a></h1>
          			</div>
          		</div>
                <div class="box2">
                
                
                        <div id="overlay">
                            <div class="menu" id="menu">
                                <ul>
                                    <li><a href="#">トップ</a></li>
                                    <li>{!! link_to_route('kyujin', '求人') !!}</li>
                                    <li>{!! link_to_route('company', '協力企業') !!}</li>
                                    <li>{!! link_to_route('profile', '専門家ネットワーク') !!}</li>
                                    <li>{!! link_to_route('moushikomi', '問合わせ・会員登録') !!}</li>
                                    <li>{!! link_to_route('welcome', 'つぶやき相談室') !!}</li>
                                </ul>
                            </div>
                        </div>
                    
                    <a class="menu-trigger" href="#"><span></span><span></span><span></span></a>
    			
          		</div>
          	</div>
          </div>
     
      </nav>

      <!-- 背景とビデオ -->
      <div id="top" class="top__bg">
        <video autoplay muted loop class="top__video">
          <source src="video/shokuai_2.mp4" type="video/mp4">
        </video>
      </div>

      <div class="top__text-box">
        <h1 class="top__title">職　逢</h1>
        <div class="top__catchphrase">SHOKU＿AI</div>
        
       <div class="top__text">障害者、被介護者をもつ家族の</div>
       <h2 class="top__text">就労支援サービス</h2>
       </div>

    </section>

<div class="container">
        <div class="row">   
       <section id="prepare" class="prepare">
      <h2 class="prepare__title animated">職逢の理念</h2>       
      <div class="prepare__phrase animated">介護離職は年間10万人を超え、就労機会を失おうとする障害者、被介護者をもつ家族と人材を求める理解ある企業とをマッチングします</div>
      <div class="card__number">障害者、被介護者をもつ家族は、介護に縛られた生活によって、多くのストレス、不安を抱えています。その中には、悩みを打ち明けられないまま仕事を辞めようとしている人がいます。家族自身の就労機会および経済的基盤を失おうとしています。　一方、企業は働き方改革、社会貢献を求めれるようになった来ています。その取り組み、姿勢をアピールできる場所を求めています。家族と企業をマッチングします。</div>
      
      
          <!-- その1 -->
          <div class="card col-md-6 animated">
            <div class="card__number blue">障害者、被介護者をもつ<span class = "red bold">家族</span></div>
            <div class="card__icon">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>
            <div class="card__description">
              労働力、スキル、就労意欲を持ちながら、介護に縛られた生活によって、就労機会および経済的基盤の保障を奪われています。将来的な金銭的な保証が無いため、就労機会による収入を求めています。介護離職の約半数が、誰にも相談しなかった人です。
            </div>
          </div><!--/.card -->

          <!-- その2 -->
          <div class="card col-md-6 animated">
            <div class="card__number blue">働き方改革、社会貢献<span class = "red bold">企業</span></div>
            <div class="card__icon">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>
            <div class="card__description">
              働き方改革、社会貢献を起業に求めれるようになった来ています。そして、その企業としての取り組みを外部にアピールしたいと考えている企業。また、優秀な人材が介護等で辞めざるをえない状況です。また、あらゆる人手不足の企業に介護等の家族を雇うリスクを抑えて紹介することによって企業の人手不足にも貢献できます。
            </div>
          </div><!--/.card -->

          
        
    </section><!--/.prepare -->
    
    <section id="prepare" class="prepare_2">
      <div class="prepare__phrase animated">目指していること</div>
      <h2 class="prepare__title animated moji_size_1">社会的問題を課題と捉え、社会的弱者を助け合うプラットフォームの提案を目指し、実行、形にしていきます。</h2>
      
          <!-- その1 -->
          <div class="card col-md-4 animated">
            <div class="card__number blue">社会的問題と課題</div>
            <div class="card__icon">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>
            <div class="card__description">
              自然、地域、人は様々な問題を抱えています。それら社会的問題を課題と捉えていきます。
            </div>
          </div><!--/.card -->

          <!-- その2 -->
          <div class="card col-md-4 animated">
            <div class="card__number blue">社会的弱者を助け合う</div>
            <div class="card__icon">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>
            <div class="card__description">
             身体的・精神的に健康を維持し、有意義な生活を送れていない社会的弱者に、適切な情報をていねいに提供し、助け合う仕組みを作ります。

            </div>
          </div><!--/.card -->

          <!-- その3 -->
          <div class="card col-md-4 animated">
            <div class="card__number blue">プラットフォームの提案</div>
            <div class="card__icon">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>
            <div class="card__description">
             IOT、インターネット、SNSなどの技術を駆使し、社会的弱者を助け合うプラットフォームを提案し、実行し、課題解決していきます。
            </div>
          </div><!--/.card -->
        
    </section><!--/.prepare -->
   
    
		</div><!--/.row -->
      </div><!--/.container -->
    <!-- フッター -->
    <footer>
      &copy; 2017 SHIKUAI
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
