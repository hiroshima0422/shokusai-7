<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>SHOKUAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Webフォント -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/vendor/animate.css">
    <link rel="stylesheet" href="../css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Marcellus">
    <link rel="stylesheet" href="../css/main.css">
    
   
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <section class="top_2">
      <!-- ナビゲーションバー -->
      <nav class="navbar navbar-default navbar-fixed-top">
      
          <div class="boxA">
          	<div class="boxA-inner">
          		<div class="box1">
          			<div class="site">
          			<h1><a href="#"><img src="../img/shokuai_rogo.jpg" alt="hrc" width="150" height="75"></a></h1>
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
            @include('commons.error_messages')
            
            @yield('content')
        </div>

    <!-- フッター -->
    <footer>
      &copy; 2017 SHOKUAI
    </footer>
    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/vendor/jquery.waypoints.min.js"></script>
    <script src="../js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="../js/vendor/mobile-detect.min.js"></script>
    <script src="../js/main.js"></script>
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