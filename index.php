<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        color: white;
        margin: 0;
        padding: 0;
        text-align: center;
        background-image: url('captiveportal-bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
        background-position: center;
        text-shadow: 2px 2px 4px rgba(173, 216, 230, 0.5);
        
      }
  
  .header {
    background-color: rgba(255, 255, 255, 0.55);
  }
  p {
    font-weight: bold;
  }
  .logo {
    width: 100px;
    padding-right: 25px;
    height: auto;
  }
  .netlogo {
    width: 150px;
    height:auto;
    padding-left: 25px;
  }
  .wifilogo {
    width: 150px;
    height:auto;
  }
  
  .content {
    padding: 20px;
  }
  .button {
    background-color: #4CAF50; /* Green background */
    border: none; /* No border */
    color: white; /* White text */
    padding: 15px 32px; /* Padding */
    text-align: center; /* Centered text */
    text-decoration: none; /* No underline */
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer; /* Pointer cursor on hover */
    border-radius: 4px
  }
  .button:hover {
    background-color: #45a049;
  }

    </style>
</head>
<body>
    <div class="header">
        <img src="captiveportal-logo.png" alt="Logo" class="logo">
        <img src="captiveportal-netlogo.png" alt="Logo" class="netlogo">
    </div>
    <br>
    <br>
    <div class="content">
      <h1>Welcome <br> To <br>
      College of Applied Business and Technology
      </h1>
      <br>
      <img class="wifilogo" src="captiveportal-wifi.png" alt="">
      <br><br>
      <p>Accept the terms and conditions to connect.</p>
        <form method="post" action="$PORTAL_ACTION$" onsubmit="return validateForm()">
            <!-- Hidden field for redirection URL -->
            <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
            <!-- Hidden field for zone -->
            <input name="zone" type="hidden" value="$PORTAL_ZONE$">
            <p><input type="checkbox" id="termsCheckbox">
            <label for="termsCheckbox">I accept the terms and conditions</label></p><br>
            <!-- Check button -->
            <div id="errorMessage" style="color: red;"></div>
           
            <input class="button" name="accept" type="submit" value="Connect" >
        </form>
</body>
<script>
        // function validateForm() {
        //     if (!document.getElementById('termsCheckbox').checked) {
        //         alert("Please accept the terms and conditions.");
        //         return false;
        //     }
        //     return true;
        // }
        function validateForm() {
            var errorMessageDiv = document.getElementById('errorMessage');
            if (!document.getElementById('termsCheckbox').checked) {
                errorMessageDiv.innerHTML = "Please accept the terms and conditions.";
                return false;
            }
            errorMessageDiv.innerHTML = "";
            return true;
        }
    </script>
</html>