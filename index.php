<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemons API REST</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<?php
  require("./bd.php");

  $prepared = $db->prepare("SELECT * FROM tipos");     
  $prepared->execute();
        
  $tipos = $prepared->fetchAll();
?>
<body>
  <div class="container">
    <h1>Inserta tu pokemon</h1>
    <form>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-4">
          <label for="inputTipo">Tipo</label>
          <select id="inputTipo" class="form-control">
            <?php foreach ($tipos as $tipo) { ?>
              <option value="<?= $tipo["id"] ?>"><?= $tipo["Nombre"] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-check" style="display: flex; align-items: center; margin-left: 15px;">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Shiny
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Registrar pokemon</button>
    </form>
  </div>
</body>
</html>