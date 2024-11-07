<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest 2</title>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
  
<body>
<div class="quests">
    <h2 class="text-center">Questão 2 <span class="badge badge-secondary"></h2><br>
    <h4 class="text-center">Qual é o nome do alien abaixo? <span class="badge badge-secondary"></h3>
    <div class="text-center">
    <img src="images/Xlr8_image.JPG" class="rounded" alt="Xlr8">
</div><br>

    <div class="text-center">
    <form action="quest2.php" method="post" class="mt-4">
        <div class="alter">
    <div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  XJ6
  </label>
</div>
</div>
<div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    XLR8
  </label>
</div><br>
<div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios3">
    Corredor
  </label>
</div>
<div class="form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios4">
    Alien-X
  </label>
</div>
</div>   
<br> <button type="reset" class="btn btn-warning text">Limpar</button><br>
            <button type="submit" class="btn btn-outline-success btn-block">Escolher</button>
            
</div>
        
            
            
        </form>
    
    
</body>
</html>