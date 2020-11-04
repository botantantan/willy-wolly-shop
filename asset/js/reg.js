let timeoutid = 0;
        function cekuser_event(){
            clearTimeout(timeoutid);
            timeoutid = setTimeout(cekuser, 500);
        }
        function cekpass_event(){
            clearTimeout(timeoutid);
            timeoutid = setTimeout(cekpass, 500);
        }

        function cekuser(){
            const username = document.getElementById("username").value;
            if (username.length==0){
                removeuserclass();
                return;
            }
            const formdata = new FormData();
            formdata.append("username", username);
            fetch("./asset/php/useravail.php",{
                method:"POST",
                body:formdata
            })
            .then(response => response.json())
            .then(response => setuserbox(response.available))
            .catch(e => console.error(e));
        }

        function cekpass(){
            const password = document.getElementById("password");
            const confirm_password = document.getElementById("confirm_password");
          
          function validatePassword(){
            if(password.value != confirm_password.value) {
              setuserbox(unavailable);
            } else {
                setuserbox(available);
            }
          }
          
          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;
        }
        function setuserbox(available){
            const userdom = document.getElementById("username");
            userdom.classList.remove("available", "unavailable");
            userdom.classList.add(available ? "available" : "unavailable");
        }

        function removeuserclass(){
            const userdom = document.getElementById("username");
            userdom.classList.remove("available", "unavailable");
        }
     
            