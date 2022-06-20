<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .container{
    line-height: 40px;
 
  }

</style>

<body>

<div class="container">
<form method="get" action="while.php">
  <?php
  $counter = 1;
  while($counter <= 5) {
    echo "Valor $counter: <input type = 'number' name= 'v$counter' max='100' min='0' value = '0' /><br/>";
    $counter++;
  }
?>
<input type = "submit" value= "Enviar" class="botao"/>

</form>

</div>
  
</body>
</html>



<!-- ---------------estudando while--------------------- -->



<!-- <?php
// $c = 1;
// while ($c <= 10) {
//   echo "<br/> $c";
//   $c++;
// }

// $c=10;
// while($c>=0){
//   echo "<br/> $c";
//   $c-=2;
// }

?> -->
