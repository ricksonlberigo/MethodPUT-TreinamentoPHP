<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Treinamento PHP - Hypersoft">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <title>Treinamento PHP - Hypersoft</title>
</head>

<body>
  <div class="form__container">
    <h2>Livro de Visitas</h2>

    <div class="form__content">
      <form action="./api/apiFormPUT.php">
        <div class="input-group">
          <input type="email" name="email" id="email" placeholder="Digite o seu e-mail">
        </div>
        <div class="input-group">
          <input type="text" name="name" id="name" placeholder="Digite o seu nome">
        </div>
        <button type="submit" class="btn" name="send">Cadastrar</button>
      </form>
    </div>

    <p>"Hypersoft Software House - Treinamento PHP"</p>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./assets/js/app.js"></script>

</html>