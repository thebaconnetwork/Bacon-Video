<? php


?>
<html lang="en">
<head>
  <title>Bacon Video - Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/w3.css">
</head>
<body onload="document.getElementById('id01').style.display='block'">
  <div class="w3-container">
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
          <img src="http://www.w3schools.com/w3css/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="form.asp">
          <div class="w3-section">
            <label><b>Username</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
            <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
          </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <a href="./index.php" type="button" class="w3-btn w3-red">Cancel</a>
          <span class="w3-right w3-padding w3-hide-small"><a href="#">Forgot password?</a></span>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
