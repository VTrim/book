<?php if($moder): ?>
<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=/moder/">
<?php endif; ?>

    <div style="background: url(http://u1.s.progorodnn.ru/userfiles/picitem/img-20150423104643-682.jpg);"  class="jumbotron">
 <div style="background: white;" class="container"><div id="cover" class="inner cover">
            <h1 style=" color: white; border-radius: 10px;" class="btn btn-lg btn-primary btn-block">Авторизація модератора
</h1>
<div  class="alert alert-success" role="alert">
Введіть дані Вашого аккаунту.

  </div>
</div>

<div id="result"></div>

<div id="form" class="form-signin">
        <h2 class="form-signin-heading">Логін:</h2>
        <input type="url" id="login" class="form-control" placeholder="Логін">
        <h2 class="form-signin-heading">Пароль:</h2>
        <input type="password" id="password" class="form-control" placeholder="Пароль" required><br/>
		<button onclick="auth()" class="btn btn-lg btn-primary btn-block">Увійти</button>
          </div>

<script>

function auth() {
	
	login = document.getElementById("login").value;
	password = document.getElementById("password").value;

    var request = new XMLHttpRequest(); 
    request.open("POST", "/moder/authconnect/", true); 
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send("login="+login+"&password="+password);
    request.onreadystatechange = function() {
 
      if (request.readyState == 4) 
      {
         if(request.status == 200) 
         {

         document.getElementById("result").innerHTML = request.responseText;

         }
      }
    };

}

</script>