<p> ФОРУМ </p>

  

  @foreach ($posts as $post)

  <h1 class="text-3xl font-bold underline">
  {!!$post->title!!}
  </h1> 


{{$post->preview}}
  @endforeach

{{$posts->links()}}

<style>

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
    margin: 30px;
    font-family: Arial, Helvetica, sans-serif;
}
input, textarea {
     width: 400px;
     margin: 5px;
}
form {
    display: flex;
    flex-direction: column;
}
</style>


 
   

<p> <?php
if (!empty($_SESSION['login'])){
echo $_SESSION['login'];
} else echo'Пользователь не авторизирован';
?>
</p>

<form action="" method="POST">
 
 <button type="input" name="buttonExit" class="btn btn-danger">Выход</button>
 </form>
<form action="" method="POST">
 

<textarea name="comment" cols="10" rows="10" placeholder="Пишите ,на здоровье, ваши комментарии :)" required></textarea>
<input type="submit"> 

</form>

<hr>

<h2>Форум</h2>



