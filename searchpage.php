
<?php 
  session_start(); 
      if(isset($_REQUEST['o'])){
          $_SESSION['order'] = json_decode($_REQUEST['o']);
          if(isset($_SESSION['order'])){
      }
  }
	?>

	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Search Page</title>
</head>
<body>
      <!-- NAVBAR -->
 <!--  DEV MOUAD -->
<div class="container-fluid-fullwidth">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
  <a class="navbar-brand hover" href="index.php"><span class="hover" style="color:#F7ECE1;"> GETFLIX</span> </a>
  
</div>

    <form class="form-inline smallsearch col-sm-8 col-xs-11" style="height:24px; padding-bottom:3%;padding-left:5%;">
		<div class="row col-11">
      <input class="form-control col-xs-11 col-11"  type="search" id="myInput" onkeyup="myFunction()"  placeholder="Search">&nbsp;
      
	</form>
	
	
  </div>

  <!--Affichage de l'icone panier-->
  <i id="shop" class="fas fa-shopping-cart fa-2x" onClick="toggling()">
  
  <div id="popUp">
  <ul id="orderList"></ul>
  <select id="select"><option value = "1">Belgium</option><option value = "2">E.U</option><option value = "3">Out E.U</option></select>
  <input type ="text" id="promo" placeholder="Promo Code">
  <form method ="POST">
  <input id="totalPrice" name="totalPrice">
  <input type="submit" value="Validate" id="Validate">
  </form>
  </div>
  

  <!--Rond où sera afficher le nombre de film-->
    <div id="amount">
      
    </div>
  </i>


  <div class="collapse navbar-collapse justify-content-center"  id="navbarTogglerDemo02">
	

<?php  if (isset($_SESSION['pseudo'])) : ?>
      <p style="color : white;">Welcome <strong> <?php echo $_SESSION['pseudo']; ?> </strong></p>
      <?php endif ?>
   <p> <a href="index.php?logout='1'" style="color: red;" onclick ="logout();" name="logout" >&nbsp;logout <?php include('logout.php') ?> </a> </p>
</div>

</div>

</nav>
 </div>

<!-- END NAVBAR -->
<!-- END DEV MOUAD -->


<ul id="myUL" class="container" onclick="shutDown()">

<li id="Movienum1" class ="poster"><a id="black mirror" herf="landing.php?id=9"><img  src="Photos/blackmirror.jpg" alt="Black Mirror" ></a></li>
<li id="Movienum2" class ="poster"><a id="The Boys" herf="landing.php?id=10"><img  src="Photos/boys.jpg" alt="The Boys" ></a></li>
<li id="Movienum3" class ="poster"><a id="Game of Throne" herf="landing.php?id=11"><img  src="Photos/gof.jpg" alt="Game of Throne"></a></li>
<li id="Movienum4" class ="poster"><a id="Mis fits" herf="landing.php?id=12"><img  src="Photos/misfit.jpg" alt="Mis fits" ></a></li>
<li id="Movienum5" class ="poster"><a  id="Angry Bird" herf="landing.php?id=5"><img  src="Photos/angry.jpg" alt="Angry Bird"></a></li>
<li id="Movienum6" class ="poster"><a id="Terminator" herf="landing.php?id=6"><img  src="Photos/terminator.jpg" alt="Terminator"></a></li>
<li id="Movienum7" class ="poster"><a id="Tarantino" herf="landing.php?id=6"><img  src="Photos/once.jpg" alt="Tarantino" ></a></li>
<li id="Movienum8" class ="poster"><a id="Dora" herf="landing.php?id=8"><img  src="Photos/dora.jpg" alt="Dora"></a></li>
<li id="Movienum9" class ="poster"><a id="Joker" href="landing.php?id=1"><img  src="Photos/joker.jpg" alt="Joker" ></a></li>
<li id="Movienum10" class ="poster"><a id="ça" herf="landing.php?id=2"><img  src="Photos/ca.jpg" alt="ça" ></a></li>
<li id="Movienum11" class ="poster"><a id="fast and furious" herf="landing.php?id=3"><img  src="Photos/fast.jpg" alt="fast and furious"></a></li>
<li id="Movienum12" class ="poster"><a id="Président" herf="landing.php?id=4"><img  src="Photos/president.jpg" alt="Président" ></a></li>
<li id="Movienum13" class ="poster"><a id="Rick et Morty" herf="landing.php?id=13"><img  src="Photos/morty.jpg" alt="Rick et Morty"></a></li>
<li id="Movienum14" class ="poster"><a id="Happy" herf="landing.php?id=14"><img  src="Photos/happy.jpg" alt="Happy"></a></li>
<li id="Movienum15" class ="poster"><a id="The walking dead" herf="landing.php?id=15"><img  src="Photos/walking.jpg" alt="The walking dead" ></a></li>
<li id="Movienum16" class ="poster"><a id="Heroes" herf="landing.php?id=16"><img  src="Photos/heroes.jpg" alt="Heroes"></a></li>

<li id="Movienum17" class ="poster"><a id="Les dents de la mer" herf="www.coin.com"><img  src="Photos/dentmer.jpg" alt="Les dents de la mer"></a></li>
<li id="Movienum18" class ="poster"><a id="zombieland 2" herf="www.coin.com"><img  src="Photos/zombieland.jpg" alt="zombieland 2"></a></li>
<li id="Movienum19" class ="poster"><a id="Rambo" herf="www.coin.com"><img  src="Photos/rambo.jpg" alt="Rambo" ></a></li>
<li id="Movienum20" class ="poster"><a id="Steve Jobs" herf="www.coin.com"><img  src="Photos/jobs.jpg" alt="Steve Jobs"></a></li>
<li id="Movienum21" class ="poster"><a id="Capitain Fantastic" herf="www.coin.com"><img  src="Photos/capitaine.jpg" alt="Capitain Fantastic" ></a></li>
<li id="Movienum22" class ="poster"><a id="Sweet dream of america" herf="www.coin.com"><img  src="Photos/america.jpg" alt="Sweet dream of america" ></a></li>
<li id="Movienum23" class ="poster"><a id="Force et nature" herf="www.coin.com"><img  src="Photos/nature.jpg" alt="Force et nature"></a></li>
<li id="Movienum24" class ="poster"><a id="Mc Queeen" herf="www.coin.com"><img  src="Photos/queen.jpg" alt="Mc Queeen" ></a></li>
<li id="Movienum25" class ="poster"><a id="Nobody die here" herf="www.coin.com"><img  src="Photos/nobody.jpg" alt="Nobody die here"></a></li>
<li id="Movienum26" class ="poster"><a id="Deepweb" herf="www.coin.com"><img  src="Photos/deep.jpg" alt="Deepweb"></a></li>
<li id="Movienum27" class ="poster"><a id="War Crimes Dealers" herf="www.coin.com"><img  src="Photos/war.jpg" alt="War Crimes Dealers" ></a></li>
<li id="Movienum28" class ="poster"><a id="Avicii" herf="www.coin.com"><img  src="Photos/avicii.jpg" alt="Avicii"></a></li>
		
    
</ul>

<script src="test.js"></script>

<!-- END NAVBAR -->
<!-- END DEV MOUAD -->

 <!--------FOOTER------->
 <?php include("footer.php"); ?>
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

let stating = true;
let popUping = document.getElementById('popUp');
function toggling(){
  if(stating){
    popUping.style.visibility = 'visible';
    stating = false;
  }else {
    popUping.style.visibility = 'hidden';
    stating = true;
  }
}
function shutDown(){
  if(popUping.style.visibility = 'visible'){
    popUping.style.visibility = 'hidden';
    stating = true;
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
</body>
</html>