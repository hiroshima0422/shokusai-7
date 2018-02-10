@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
        <div class="container">
<br>
        <div class="row">   
       
             
<article class="box">
<h1 class="prepare__title animated">つぶやき相談室</h1>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>{!! link_to_route('users.index', '相談者') !!}</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">マイ プロフィール</a></li>
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


<h3><i class="icon-file-text"></i>相談を投稿してみよう</h3>

 <aside class="">
                {!! Form::open(['route' => 'microposts.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    
                    {!! Form::submit('相談を投稿する', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </aside>
           

</article>         
        
 
    

   
    
</div><!--/.row -->
      </div><!--/.container -->
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>つぶやき相談室</h1>
                {!! link_to_route('signup.get', '新規登録して入室する', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login.get', 'ログインして入室する', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection