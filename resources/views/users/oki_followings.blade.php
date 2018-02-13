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

<h2 class="prepare__title animated midashi_1">お気に入り一覧</h2>
<div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>{!! link_to_route('users.index', '相談者') !!}</li>
                        
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
        <div class="panel-heading">
                    
                </div>
        <div class="col-xs-8">
            
           
        <ul class="media-list">
                @foreach ($microposts as $micropost)
                    <?php $user = $micropost->user;?>
                    <li class="media">
                        <div class="media-left">
                            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                        </div>
                        <div class="media-body">
                            <div>
                                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                            </div>
                            <div>
                                <p>{!! nl2br(e($micropost->content)) !!}</p>
                            </div>
                            <div>
                                @if (Auth::user()->id == $micropost->user_id)
                                    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                @endif
                            </div>
                            <div>
                                @include('user_follow.oki_button', ['user' => $user])
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>

           
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