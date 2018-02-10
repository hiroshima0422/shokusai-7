@extends('layouts.app_2')

@section('content')
    @include('users.users', ['users' => $users])
@endsection