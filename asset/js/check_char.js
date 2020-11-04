$(document).ready(function(){
    $("#username").keypress(function (e) {
      var key = e.keyCode || e.which;       
      $("#error_msg").html("");
      //Regular Expression
      var reg_exp = /^[A-Za-z0-9 ]+$/;
      //Validate Text Field value against the Regex.
      var is_valid = reg_exp.test(String.fromCharCode(key));
      if (!is_valid) {
        $("#error_msg").html("No special characters Please!");
      }
      return is_valid;
    });
  });