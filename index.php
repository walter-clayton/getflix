
<!-- HEADER -->
  <?php 
          
    session_start(); 

  if (!isset($_SESSION['pseudo'])) {
    $_SESSION['msg'] = "You must log in first";
    echo '<h1 style="color: white;">' .'you must login to add comments!' . '</h1>';
    header('location: signIn.php');
  }
  
  ?>

<?php include("header.php"); ?>



    <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <span style="color: white;">
          <?php 
            echo $_SESSION['success']; 
          ?>
          </span>
      </div>
    <?php endif ?>

    
    
</div>


  <!--  SAMUEL SCROLL-->
  <div class="container" style="padding-top:3%;">
<h2 style="color:white;">Populaire</h2>
  <div class="populaire-carousel">
  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
    <!--  SAMUEL SCROLL-->



  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li id="Movienum1" class ="poster"><a id="Joker" href="landing.php?id=1"><img  src="Photos/joker.jpg" alt="Joker" ></a></li>
		  <li id="Movienum2" class ="poster"><a id="ça" href="landing.php?id=2"><img  src="Photos/ca.jpg" alt="ça" ></a></li>
		  <li id="Movienum3" class ="poster"><a id="fast and furious" href="landing.php?id=3"><img  src="Photos/fast.jpg" alt="fast and furious"></a></li>
		  <li id="Movienum4" class ="poster"><a id="Président" href="landing.php?id=4"><img  src="Photos/president.jpg" alt="Président" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li id="Movienum5" class ="poster"><a id="Angry Bird" href="landing.php?id=5"><img  src="Photos/angry.jpg" alt="Angry Bird"></a></li>
	  <li id="Movienum6" class ="poster"><a id="Terminator" href="landing.php?id=6"><img  src="Photos/terminator.jpg" alt="Terminator"></a></li>
	  <li id="Movienum7" class ="poster"><a id="Once Upon a Time... in Hollywood" href="landing.php?id=7"><img  src="Photos/once.jpg" alt="Once Upon a Time... in Hollywood" ></a></li>
	  <li id="Movienum8" class ="poster"><a id="Dora" href="landing.php?id=8"><img  src="Photos/dora.jpg" alt="Dora"></a></li>
		
  </ul>

  </div>
  </div>
  </div>
<h2 style="color:white;">Serie</h2>
  <div class="serie-carousel">
  <div id="carousel-example-multi1" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi1" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi1" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
   
   
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li id="Movienum9" class ="poster"><a id="black mirror" href="landing.php?id=9"><img  src="Photos/blackmirror.jpg" alt="Black Mirror" ></a></li>
		  <li id="Movienum10" class ="poster"><a id="The Boys" href="landing.php?id=10"><img  src="Photos/boys.jpg" alt="The Boys" ></a></li>
		  <li id="Movienum11" class ="poster"><a id="Game of Throne" href="landing.php?id=11"><img  src="Photos/gof.jpg" alt="Game of Throne"></a></li>
		  <li id="Movienum12" class ="poster"><a id="Mis fits" href="landing.php?id=12"><img  src="Photos/misfit.jpg" alt="Mis fits" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li id="Movienum13" class ="poster"><a id="Rick et Morty" href="landing.php?id=13"><img  src="Photos/morty.jpg" alt="Rick et Morty"></a></li>
	  <li id="Movienum14" class ="poster"><a id="Happy" href="landing.php?id=14"><img  src="Photos/happy.jpg" alt="Happy"></a></li>
	  <li id="Movienum15" class ="poster"><a id="The walking dead" href="landing.php?id=15"><img  src="Photos/walking.jpg" alt="The walking dead" ></a></li>
	  <li id="Movienum16" class ="poster"><a id="Heroes" href="landing.php?id=16"><img  src="Photos/heroes.jpg" alt="Heroes"></a></li>
		
  </ul>

  </div>
  </div>
  </div>
<h2 style="color:white;">Film</h2>
  <div class="film-carousel">
  <div id="carousel-example-multi2" class="carousel slide carousel-multi-item v-3" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi2" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi2" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi2" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v- " role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li id="Movienum17" class ="poster"><a id="Clones" href="landing.php?id=17"><img  src="Photos/clone.jpg" alt="Clones" ></a></li>
		  <li id="Movienum18" class ="poster"><a id="Paul" href="landing.php?id=18"><img  src="Photos/paul.jpg" alt="Paul" ></a></li>
		  <li id="Movienum19" class ="poster"><a id="Im Legend"  href="landing.php?id=19"><img  src="Photos/legend.jpg" alt="Im Legend"></a></li>
		  <li id="Movienum20" class ="poster"><a id="Ralph 2.0" href="landing.php?id=20"><img  src="Photos/ralph.jpg" alt="Ralph 2.0" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li id="Movienum21" class ="poster"><a id="Les dents de la mer" href="landing.php?id=21"><img  src="Photos/dentmer.jpg" alt="Les dents de la mer"></a></li>
	  <li id="Movienum22" class ="poster"><a id="Zombieland 2" href="landing.php?id=22"><img  src="Photos/zombieland.jpg" alt="Zombieland 2"></a></li>
	  <li id="Movienum23" class ="poster"><a id="Rambo" href="landing.php?id=23"><img  src="Photos/rambo.jpg" alt="Rambo" ></a></li>
	  <li id="Movienum24" class ="poster"><a id="Steve Jobs" href="landing.php?id=24"><img  src="Photos/jobs.jpg" alt="Steve Jobs"></a></li>
		
  </ul>

  </div>
  </div>
  </div>
<h2 style="color:white;">Documantaire</h2>
  <div class="documentaire-carousel">
  <div id="carousel-example-multi3" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi3" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi3" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

	<div class="carousel-item active ">
		<ul>
		  <li id="Movienum25" class ="poster"><a id="Capitain Fantastic" href="landing.php?id=25"><img  src="Photos/capitaine.jpg" alt="Capitain Fantastic" ></a></li>
		  <li id="Movienum26" class ="poster"><a id="requiem for the american dream" href="landing.php?id=26"><img  src="Photos/america.jpg" alt="requiem for the american dream" ></a></li>
		  <li id="Movienum27" class ="poster"><a id="Force et nature" href="landing.php?id=27"><img  src="Photos/nature.jpg" alt="Force et nature"></a></li>
		  <li id="Movienum28"class ="poster"><a id="Mc Queen" href="landing.php?id=28"><img  src="Photos/queen.jpg" alt="Mc Queen" ></a></li>
  </ul>
  </div>

  <div class="carousel-item ">
	
      <ul >
	  <li id="Movienum29" class ="poster"><a id="Nobody die here" href="landing.php?id=29"><img  src="Photos/nobody.jpg" alt="Nobody die here"></a></li>
	  <li id="Movienum30" class ="poster"><a id="Deepweb" href="landing.php?id=30"><img  src="Photos/deep.jpg" alt="Deepweb"></a></li>
	  <li id="Movienum31" class ="poster"><a id="War Crimes Dealers" href="landing.php?id=31"><img  src="Photos/war.jpg" alt="War Crimes Dealers" ></a></li>
	  <li id="Movienum32" class ="poster"><a id="Avicii" href="landing.php?id=32"><img  src="Photos/avicii.jpg" alt="Avicii"></a></li>
		
  </ul>

  </div>
</div>
</div>
</div>
 <!--------FOOTER------->
<?php include("footer.php"); ?>


<!--Début Panier-->
</body>
</html>

<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

let amount = 0;
  const amountInfo = document.getElementById('amount');
  let price = '';
  let order = []
  let test = ''
  

  <?php
  if(isset($_SESSION['order'])) {
  for($i = 0; $i < sizeof($_SESSION['order']); $i++){
    echo "order.push(".json_encode($_SESSION['order'][$i]).");";
  }
}
  ?>

  console.log(order)
  const orderList = document.getElementById("orderList");
  const arrayPrices = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28]
  var jsondata;
  var flickr;
  var data; 
if(order.length >0 ){
  for(let i = 0; i < order.length; i++) {
    console.log(amount)
    amount += order[i].amount;
  
  }
}
let taxe = 0;
const select = document.getElementById('select');
let totalPrice = amount * 3 + taxe;
let reduction = totalPrice/20;
let promo = false

document.getElementById('totalPrice').value = totalPrice -(amount>= 5 ? reduction : 0) + " EUR";
document.getElementById('promo').onkeyup = function(){
  console.log(222)
  if(document.getElementById('promo').value == "MikeEstTropCool "){
    console.log(333)
    document.getElementById('promo').style.border = "2px solid rgb(40,160,80)";
    document.getElementById('promo').style.backgroundColor = "rgb(70,175,130)";
    document.getElementById('promo').style.color = "white";
    promo = true;
    updatePrice();
  } else {
    promo = false;
    document.getElementById('promo').style.border = "initial";
    document.getElementById('promo').style.backgroundColor = "initial";
    document.getElementById('promo').style.color = "initial";
    updatePrice();
  }
};
select.onchange = function() {
  console.log(select.options[select.selectedIndex].value)
  updatePrice();
}
function updatePrice(){
  if(select.options[select.selectedIndex].value == "1"){
    taxe = 0;
    totalPrice = amount * 3 + taxe ;
    document.getElementById('totalPrice').value = totalPrice-(amount>= 5 ? reduction : 0)-(promo ? (totalPrice/100 *15): 0)  + " EUR";
  }else if(select.options[select.selectedIndex].value == "2"){
    taxe = 2.5;
    totalPrice = amount * 3 + taxe ;
    document.getElementById('totalPrice').value = totalPrice-(amount>= 5 ? reduction : 0)-(promo ? (taxe + totalPrice/10): 0)  + " EUR";
  }else{
    taxe = 5;
    totalPrice = amount * 3 + taxe;
    document.getElementById('totalPrice').value = totalPrice-(amount>= 5 ? reduction : 0)-(promo ? (taxe + totalPrice/10): 0)  + " EUR";
  }
  flickr = order;
  data = JSON.stringify(flickr);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "searchpage.php", !0);
  xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  xhr.send(data);
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // in case we reply back from server
          //jsondata = JSON.parse(xhr.responseText);
          window.location.href = `${window.location.href.substring(0, window.location.href.indexOf('.php') + 4)}?o=${data}`
          console.log(456);
      }
  }
}

function putPrice(){
    arrayPrices.map(elem => {
        price = document.createElement('button');
        document.getElementById(`Movienum${elem}`).appendChild(price) ;
        price.innerHTML = "Buy (3 EUR)";
        price.className = "price" ;
        amountInfo.innerHTML = amount
        if(amount > 0)amountInfo.style.opacity = '1';

        price.onclick = ()=>{
        console.log(document.getElementById(`Movienum${elem}`).childNodes[0].childNodes[0]);
        if (order.includes(order.filter(elem2 => elem2.name == document.getElementById(`Movienum${elem}`).childNodes[0].id)[0])){
            order[order.indexOf(order.filter(elem2 => elem2.name == document.getElementById(`Movienum${elem}`).childNodes[0].id)[0])].amount += 1
        }else{
            order.push({
                name: document.getElementById(`Movienum${elem}`).childNodes[0].id,
                poster: document.getElementById(`Movienum${elem}`).childNodes[0].childNodes[0].src,
                amount: 1
            });
        }
        updateSession()

        fillPopUp();
        }
    })
}
putPrice();


function fillPopUp(){
        console.log(order)
        orderList.innerHTML = "";
        order.map(elem =>{
        const li = document.createElement('li');
        const img = document.createElement('img');
        const p = document.createElement('p');
        const div = document.createElement('div');
        const add = document.createElement('button');
        const remove = document.createElement('button');
        const input = document.createElement('input');
        p.innerHTML = elem.name;
        img.src = elem.poster;
        img.className = 'orderPoster';
        input.value = elem.amount;
        add.innerHTML = "+";
        remove.innerHTML = "-";
        orderList.appendChild(li);
        li.appendChild(img);
        li.appendChild(p);
        li.appendChild(div);  
        div.appendChild(remove);
        div.appendChild(input);
        div.appendChild(add);
        
        add.onclick = function (){
            elem.amount++;
            input.value = elem.amount;
            updateSession()
        }
        remove.onclick = function(){
            elem.amount--;
            input.value = elem.amount;
            if(input.value <= 0){
                orderList.removeChild(li)
                order = order.filter(elem2 => elem2.amount != 0)
                console.log(order)

            }
            updateSession()
        }
    })
    return order
}
fillPopUp()

function updateSession() {
  flickr = order;
  data = JSON.stringify(flickr);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "searchpage.php", !0);
  xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  xhr.send(data);
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // in case we reply back from server
          //jsondata = JSON.parse(xhr.responseText);
          window.location.href = `${window.location.href.substring(0, window.location.href.indexOf('.php') + 4)}?o=${data}`
          console.log(456);
      }
  }
} 
</script>
<?php
    $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST['totalPrice'])){
  $pseudo = $_SESSION['pseudo'];
  $totalPrice = $_POST['totalPrice'];
  
  $db->exec("INSERT INTO orders (pseudo, price) VALUES ('$pseudo','$totalPrice')");
  $selectOrd = $db->query("SELECT id FROM orders WHERE pseudo = '$pseudo' ");
  while($ordId=$selectOrd->fetch()){
    $ordering = $ordId['id'];
  }
  $db->exec("INSERT INTO detail_order (id_order, amount) VALUES ('$ordering', '$totalPrice')");
}

?>

