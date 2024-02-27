<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Pwd Generator</title>
</head>
<body class="p-5">
<form class="container" action="index.php" method="POST">
  <div class=" row">
    <label for="length" class="form-label">Lungezza password</label>
    <input type="number" class="form-control " id="length" aria-describedby="emailHelp">
  </div>
  
    <span>Consenti ripetizioni uno o piu caratteri</span>

  <div class="form-check">
  
  <input class="form-check-input" type="radio" name="pwdrepeat" id="pwdrep" value="1">
  <label class="form-check-label" for="pwdrep">
    Si
  </label>
</div>
<div class="form-check">
  
  <input class="form-check-input" type="radio" name="pwdrepeat" id="pwdrep" value="0">
  <label class="form-check-label" for="pwdrep">
   No
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="letters">
  <label class="form-check-label" for="letters">
    Letteri
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="chars">
  <label class="form-check-label" for="chars">
    Caratteri
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="nums">
  <label class="form-check-label" for="nums">
    Numeri
  </label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>