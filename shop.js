
  let amount = 0;
  const amountInfo = document.getElementById('amount');
  const shop = document.getElementById('shop');
  let price = 0;


  window.onclick = ()=>{
  amount += 1;
  amountInfo.innerHTML = amount;
  amountInfo.style.opacity = '1';
  
  }


  //Fonction servant à afficher le pop up
  let affichPopUp = document.getElementById('popUp');
  function popUp(){
    if(affichPopUp.style.display == 'none'){
      affichPopUp.style.display = 'block';
    }else{
      affichPopUp.style.display = 'none';
    }
  }

function putPrice(){
    for (let i=1;i<=28;i++){
        price = document.createElement('button');
        document.getElementById(`Movienum${i}`).appendChild(price) ;
        price.innerHTML = "Buy (3 €)";
        price.className = "price" ;
    }

}
putPrice();