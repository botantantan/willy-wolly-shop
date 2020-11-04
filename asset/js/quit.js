function logout () {
      var data = new FormData();
      data.append('req', 'out');
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "asset/php/ajax.php");
      xhr.onload = function () {
        if (xhr.status==200) {
          let response = JSON.parse(this.response);
          if (response.status) {
            window.location.href = "../../index.php";
          } else {
            alert(response.msg);
          }
        }
        else {
          alert("SERVER ERROR");
          console.log(this.response);
        }
      };
      xhr.onerror = function(e){
        alert("SERVER ERROR");
        console.log(e);
      };
      xhr.send(data);
      return false;
    }