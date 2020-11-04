
  var count = 1;
  var countEl = document.getElementById("count");
  var price = parseInt(document.getElementById("price").value);
  var remaining = parseInt(document.getElementById("remaining").value);
  function plus(){
      if (count<remaining){
        count++;
      }
      countEl.value = count;
  }
  function minus(){
    if (count > 1) {
      count--;
      countEl.value = count;

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
