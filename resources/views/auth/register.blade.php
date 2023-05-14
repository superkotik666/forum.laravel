@extends('layout.app')

@section('title', 'Регистрация')

@section('content')
<p> СТРАНИЦА РЕГИСТРАЦИИ </p>
 <form method="POST" action="{{ route("register_process") }}">
  @csrf
<p> Придумайте имя </p>
<input name="name" type="text" class=" @error('name') border-red-500 @enderror" placeholder="Имя" />>
<p> Введите адрес электронной почты </p>
<input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />>
@error('email')
{{$message}}
@enderror
<p> Придумайте пароль </p>
<input name="password" type="password">
<p> Повторите введенный пароль </p>
<input name="password_confirmation" type="password">

<div>
  <a href="{{ route("login") }}" >Есть аккаунт?</a>
</div>
<button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Зарегистрироваться</button>
 </form>
 @endsection
