<script>
current_page = 1;
current_sort = "time";
current_descasc = "DESC";

viewOffers(current_page, current_sort, current_descasc);

function viewOffers(page, sort, descasc) {
	
	current_page = page;
	current_sort = sort;
	current_descasc = descasc;

    var request = new XMLHttpRequest(); 
    request.open("POST", "/moder/open/", true); 
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send("number="+page+"&sort="+sort+"&descasc="+descasc);
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
    <div style="background: url(http://u1.s.progorodnn.ru/userfiles/picitem/img-20150423104643-682.jpg);"  class="jumbotron">
 <div style="background: white;" class="container"><div id="cover" class="inner cover">
            <h1 style=" color: white; border-radius: 10px;" class="btn btn-lg btn-primary btn-block">Скарги та пропозиції
</h1>

	  <?php if($moder): ?>
	  <b>Ви увійшли як Модератор.</b>
	  <?php endif; ?>

<div  class="alert alert-success" role="alert">
<form>
<b>Сортувати по:</b>
    <p><input id="sort" name="sort" type="radio" onchange="viewOffers(current_page, this.value)" value="name"> 
Ім'я 
<input id="sort" name="sort" type="radio" onchange="viewOffers(current_page, this.value)" value="email"> 
Email 
<input id="sort" name="sort" type="radio" onchange="viewOffers(current_page, this.value)" value="time" checked> Дата</p>
</form>

<form>
<b>У порядку:</b>
    <p><input id="descasc" name="descasc" type="radio" onchange="viewOffers(current_page, current_sort, this.value)" value="DESC" checked> 
Спадання
<input id="descasc" name="descasc" type="radio" onchange="viewOffers(current_page, current_sort, this.value)" value="ASC"> 
Зростання 
</form>
  </div>
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

 function updateOffer(id){
	 
	uname = document.getElementById("name"+id).value;
	uemail = document.getElementById("email"+id).value;
	usite = document.getElementById("site"+id).value;
	uoffer = document.getElementById("offer"+id).value;

    var request = new XMLHttpRequest(); 
    request.open("POST", "/moder/update/", true); 
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send("id="+id+"&name="+uname+"&email="+uemail+"&site="+usite+"&offer="+uoffer);
    request.onreadystatechange = function() {
 
      if (request.readyState == 4) 
      {
         if(request.status == 200) 
         {

            viewOffers(current_page, current_sort, current_descasc);

         }
      }
    };
	 
 }
 
  function deleteOffer(id){	 

    var request = new XMLHttpRequest(); 
    request.open("POST", "/moder/delete/", true); 
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send("id="+id);
    request.onreadystatechange = function() {
 
      if (request.readyState == 4) 
      {
         if(request.status == 200) 
         {
            
			viewOffers(current_page, current_sort, current_descasc);

         }
      }
    };
	 
 }

</script>

<div class="bs-example">
    <ul class="pagination">
	<?php foreach($navigation as $page): ?>
      <li><a id="<?= $page; ?>" href="#" onclick="viewOffers(this.id, current_sort, current_descasc)"><?= $page; ?></a></li>
    <?php endforeach; ?>
    </ul>
  </div>

