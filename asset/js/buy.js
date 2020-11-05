
  var count = 1;
  var countEl = document.getElementById("count");
  var price = parseInt(document.getElementById("price").value);
  // console.log(price);
  var remaining = parseInt(document.getElementById("remaining").value);
  // console.log(remaining);
  // console.log(parseInt(document.getElementById("pay").value));
  // console.log(document.getElementById("remaining"));
  var totalHarga = document.getElementById("pay");
  var total = parseInt(totalHarga.value);
  // console.log(total);
  // console.log(totalHarga);
  // console.log(typeof(total));

  function plus(){
      if (count<remaining){
        count++;
      }
      countEl.value = count;
      totalHarga.value = price*count;
  }
  function minus(){
    if (count > 1) {
      count--;
      countEl.value = count;
      totalHarga.value = price*count;
    }
}

function muncul(){
  var h2 = document.getElementById("small").querySelectorAll(".smaller");
  h2[0].style.fontSize= "1rem";
  h2[1].style.fontSize= "1rem";
  h2[2].style.fontSize= "1rem";
  h2[3].style.fontSize= "1rem";
  h2[4].style.fontSize= "1rem";
  document.getElementById("buyNow").style.display = "none";
  document.getElementById("amount").style.display = "block";
  document.getElementById("execute-akhir").style.display="block";
}
function buyNow(){
  document.getElementById("hidden-button").style.display = "flex";
  document.getElementById("hidden-button").style.flexDirection = "row";
  document.getElementById("buy-now").style.display = "none";
  document.getElementById("to-buy").style.display = "block";
  document.getElementById("address").style.display = "block";
}

function addStock(){
  document.getElementById("hidden-button").style.display = "flex";
  document.getElementById("hidden-button").style.flexDirection = "row";
  document.getElementById("buy-now").style.display = "none";
  document.getElementById("to-buy").style.display = "block";
}
