<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>SHOKUAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Webフォント -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/vendor/animate.css">
    <link rel="stylesheet" href="../../css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
	  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Marcellus">
    <link rel="stylesheet" href="../../css/main.css">
    
   
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <section class="top_2">
      <!-- ナビゲーションバー -->
      <nav class="navbar navbar-default navbar-fixed-top">
      
          <div class="boxA">
          	<div class="boxA-inner">
          		<div class="box1">
          			<div class="site">
          			<h1><a href="#"><img src="../../../img/shokuai_rogo.jpg" alt="hrc" width="150" height="75"></a></h1>
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
            <br><br>
            @include('commons.error_messages')

<div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>{!! link_to_route('users.index', '相談者') !!}</li>
                        <li>
                             <a href="{{ route('users.oki_followings', Auth::user()->id) }}">お気に入り</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'マイ プロフィール', ['id' => \Auth::user()->id]) !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', '新規登録') !!}</li>
                        <li>{!! link_to_route('login.get', 'ログイン') !!}</li>
                    @endif
                </ul>
            </div>
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
                @include('user_follow.follow_button', ['user' => $user])
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">相談<span class="badge">{{ $count_microposts }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">フォロー <span class="badge">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">フォロワー<span class="badge">{{ $count_followers }}</span></a></li>
            </ul>
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
        </div>

    <!-- フッター -->
    <footer>
      &copy; 2017 SHOKUAI
    </footer>
    <script src="../../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/vendor/jquery.waypoints.min.js"></script>
    <script src="../../js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="../../js/vendor/mobile-detect.min.js"></script>
    <script src="../../js/main.js"></script>
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