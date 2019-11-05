for (let i=1;i<=28;i++){
    const price = document.createElement('button');
    document.getElementById(`Movienum${i}`).appendChild(price) ;
    price.innerHTML = "Buy (10 €)";
    price.className = "price" ;
}