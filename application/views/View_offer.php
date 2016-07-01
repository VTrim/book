    <div style="background: url(http://u1.s.progorodnn.ru/userfiles/picitem/img-20150423104643-682.jpg);"  class="jumbotron">
 <div style="background: white;" class="container"><div id="cover" class="inner cover">
            <h1 style=" color: white; border-radius: 10px;" class="btn btn-lg btn-primary btn-block">Ваша скарга чи пропозиція
</h1>
<div  class="alert alert-success" role="alert">
Поля позначені зірочкою - обов'язкові для заповнення.

  </div>
</div>

<div id="form" class="form-signin">
        <h2 class="form-signin-heading">Ваше Ім'я: *</h2>
        <input type="url" id="name" class="form-control" placeholder="Імя">
        <h2 class="form-signin-heading">Email: *</h2>
        <input type="text" id="email" class="form-control" placeholder="Email" required>
        <h2 class="form-signin-heading">Сайт:</h2>
        <input type="text" id="site" class="form-control" placeholder="http://..." required><br/>
        <h2 class="form-signin-heading">Скарга / Пропозиція: *</h2>
        <input type="text" id="offer" class="form-control" placeholder="Опишіть детально.." required><br/>
        <h2 class="form-signin-heading">Код з зображення: *</h2>
<img src="/application/core/captcha.php"><br/>
        <input type="text" id="captcha" class="form-control" placeholder="Введіть код тут" required><br/><button onclick="addOffer()" class="btn btn-lg btn-primary btn-block">Надіслати</button>
          </div>
		  
<div id="result"></div>

<script>

function addOffer() {
	
	name = document.getElementById("name").value;
	email = document.getElementById("email").value;
	site = document.getElementById("site").value;
	offer = document.getElementById("offer").value;
	captcha = document.getElementById("captcha").value;
	
	document.getElementById("form").style.display = "none";

    var request = new XMLHttpRequest(); 
    request.open("POST", "/offer/add/", true); 
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send("name="+name+"&email="+email+"&site="+site+"&offer="+offer+"&captcha="+captcha);
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