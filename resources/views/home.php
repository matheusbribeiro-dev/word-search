<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="<?= asset('img/logo-ws.svg') ?>">
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!--My css-->
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">

  <title><?= $title ?></title>
</head>
<body>
  <main class="container">
    <header>
      <h1>WordSearch</h1>
      <form id="wordSearchForm" name="wordSearchForm">
        <input type="text" name="word" placeholder="Busque ou insira uma palavra">

        <button class="button-insert">
          <img src="<?= asset('img/download-icon.svg') ?>" alt="baixar">
        </button>
      </form>
    </header>

    <section id="words">
      <div class="word-card">
        <div class="word-card-title">
          <h1>Título</h1>
        </div>

        <div class="word-card-meaning">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iure nulla odio quas quo. Accusamus accusantium
            ad animi at dolorem illum labore placeat quae quis. A molestias pariatur perferendis sunt?
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut corporis cupiditate delectus eius,
            inventore maxime minima nihil non, obcaecati perferendis porro quia quibusdam rem reprehenderit sint suscipit
            tempora. Quia.
          </p>
        </div>
      </div>
      <div class="word-card">
        <div class="word-card-title">
          <h1>Título</h1>
        </div>

        <div class="word-card-meaning">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iure nulla odio quas quo. Accusamus accusantium
            ad animi at dolorem illum labore placeat quae quis. A molestias pariatur perferendis sunt?
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut corporis cupiditate delectus eius,
            inventore maxime minima nihil non, obcaecati perferendis porro quia quibusdam rem reprehenderit sint suscipit
            tempora. Quia.
          </p>
        </div>
      </div>
    </section>
  </main>

  <script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
