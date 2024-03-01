<?php include __DIR__."/partials/function.php";
if(isset($_GET['length'])){
  $pwdLength =$_GET['length'] ?? null ;
  $pwdLength =intval($pwdLength);
  $pwdRep = $_GET['pwdrepeat'] ?? null;

  pwdGen($pwdLength,$pwdRep);
  
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Pwd Generator</title>
</head>
<body class="p-5">
  <h1 class="text-center" >Password generator </h1>
  <div class="container w-50">

<form class="row justify-content-start align-items-center" action="index.php" method="GET">

  <div class="mb-3 col-6">
    <label for="length" class="form-label " >Lungezza password</label>
    <input type="number" class="form-control " id="length" name="length">
  </div>
  <div class="d-flex gap-2">
  <span>Consenti ripetizioni uno o piu caratteri?</span>

<div class="form-check">

<input class="form-check-input" type="radio" name="pwdrepeat" id="pwdrep" value="1" checked>
<label class="form-check-label" for="pwdrep">
  Si
</label>
</div>
<div class="form-check">
  
  <input class="form-check-input" type="radio" name="pwdrepeat" id="pwdrep" value="0" >
  <label class="form-check-label" for="pwdrep">
   No
  </label>
</div>
  </div>



<div class="form-check mt-2">
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
  <button type="submit" class="btn btn-primary col-1 mt-2">Submit</button>
</form>

</div>
<!-- <?php if(isset($pwdLength) && $pwdLength !== 0){ ?>
    <div class="m-5 p-3">
    <span>Generated password:</span>
   <span><?php echo pwdGen($pwdLength) ?> </span>
    </div>
  

 <?php } ?> -->
</body>
</html>