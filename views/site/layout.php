<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $this->getTitlePage(); ?></title>
  <link rel="stylesheet" href="public/css/libs.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <div class="nav">
        <div class="left_menu">
          <div class="menu-open">
            <i class="ri-menu-5-fill"></i>
          </div>
          <h1>AnimaList</h1>
          <div class="search-icon">
            <input type="search" placeholder="Pesquise por seu anime...">
            <i class="ri-search-2-line"></i>
          </div>
        </div>

        <div class="right_social">
          <a href="#">Forum</a>

          <div class="user-btn">
            <div class="img-avatar">
              <i class="ri-user-3-line"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $this->getComponent('sidebar'); ?>
  </header>


  <?php echo $this->viewContent(); ?>


  <footer>
  </footer>
  <script src="public/js/libs.js"></script>
  <script src="public/js/main.js"></script>
</body>

</html>