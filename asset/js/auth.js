function login () {
      // (D1) GET USER CREDENTIALS
      var data = new FormData();
      data.append('req', 'in');
      data.append('email', document.getElementById("email").value);
      data.append('password', document.getElementById("password").value);

      // (D2) AJAX LOGIN
      var xhr = new XMLHttpRequest();
      xhr.open('POST', "asset/php/ajax.php");

      // (D3) ON SERVER RESPONSE
      xhr.onload = function () {
        // HTTP RESPONSE CODE 200 = OK
        if (xhr.status==200) {
          let response = JSON.parse(this.response);
          if (response.status) {
            window.location.href = "index.php";
          } else {
            alert(response.msg);
          }
        }
        // SERVER RESPONDED WITH "NOT OK"
        // (404 NOT FOUND, 403 UNAUTHORIZED, ETC...)
        else {
          alert("SERVER ERROR");
          console.log(this.response);
        }
      };

      // (D4) SERVER DID NOT RESPOND
      xhr.onerror = function(e){
        alert("SERVER ERROR");
        console.log(e);
      };

      // (D5) GO!
      xhr.send(data);
      return false;
    }