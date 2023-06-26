<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $this->getTitlePage(); ?></title>
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
  <header>
    <div class="container">
      <nav>
        <h1>AnimaList</h1>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Social</a></li>
          <li><a href="#">Forum</a></li>
        </ul>
        <div class="right_social">
          <a href="#">Login</a>
        </div>
      </nav>
    </div>
  </header>
  <?php echo $this->viewContent(); ?>

</body>

</html>