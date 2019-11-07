
  let amount = 0;
  const amountInfo = document.getElementById('amount');
  const shop = document.getElementById('shop');
  let price = '';
  const popUp = document.getElementById('popUp');
  let order = [];
  const orderList = document.getElementById("orderList");
  const arrayPrices = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28]

function putPrice(){
    arrayPrices.map(elem => {
        price = document.createElement('button');
        document.getElementById(`Movienum${elem}`).appendChild(price) ;
        price.innerHTML = "Buy (3 €)";
        price.className = "price" ;

        price.onclick = ()=>{
        amount += 1;
        amountInfo.innerHTML = amount;
        amountInfo.style.opacity = '1';
        console.log(document.getElementById(`Movienum${elem}`).childNodes[0].childNodes[0]);
        order.push({
            name: document.getElementById(`Movienum${elem}`).childNodes[0].id,
            poster: document.getElementById(`Movienum${elem}`).childNodes[0].childNodes[0].src
        });
        fillPopUp(order);
        }
    })
}
putPrice();

function fillPopUp(order){
        console.log(order)
        orderList.innerHTML = "";
    order.map(elem =>{
        const li = document.createElement('li');
        const img = document.createElement('img');
        const p = document.createElement('p');
        p.innerHTML = elem.name;
        img.src = elem.poster;
        img.className = 'orderPoster';
        orderList.appendChild(li);
        li.appendChild(img);
        li.appendChild(p);
        
    })

}

