@extends('layout.app')

@section('title', 'Авторизация')

@section('content')



<h2> ФОРУМ ДЛЯ ВСЕХ ЖЕЛАЮЩИХ </h2>
<h3> Welcome!</h3>
<form method="POST" action="{{ route("login_process") }}" >
                @csrf
<p> Введите email </p>
<input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
<p> Введите пароль </p>
<input name="password" type="password">
<button type="input" class="btn btn-primary">Войти</button>

 </form>
 
 <p> <a href="{{ route("register") }}" target="_self">Еще не завели аккаунт? Тогда зарегистрируйтесь!</a> </p>
 @endsection

