<?php
$posts = [
  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 1'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 4'
    ]
  ],
];

$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ],
    [
      'name' => 'Narcone',
      'lastname' => 'Weed'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ],
    [
      'name' => 'Arcesco',
      'lastname' => 'Poppapedretti'
    ]
  ]
];

?>


<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post del Blog</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <h1 class="text-danger">Snack 1</h1>
    <h1 class="text-center mb-5">Elenco dei Post</h1>

    <?php foreach ($posts as $date => $postList) { ?>
      <div class="card mb-4">
        <div class="card-header bg-primary text-white">
          Data: <?= $date ?>
        </div>
        <div class="card-body">
          <?php foreach ($postList as $post) { ?>
            <h5 class="card-title"><?= $post['title'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Autore: <?= $post['author'] ?></h6>
            <p class="card-text"><?= $post['text'] ?></p>
            <hr>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <h1 class="text-danger">Snack 2</h1>
    <h1 class="text-center mb-5">Verifica Dati</h1>

    <form action="index.php" method="GET">
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" required>
      </div>
      <div class="form-group">
        <label for="age">Età</label>
        <input type="number" class="form-control" id="age" name="age" required>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>

    <div class="mt-5">
      <?php
      if (isset($_GET['name'], $_GET['mail'], $_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        // Verifica del nome, controllo (@ .), verifica età
        if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
          echo '<p class="text-success">Accesso riuscito</p>';
        } else {
          echo '<p class="text-danger">Accesso negato</p>';
        }
      }
      ?>
    </div>

    <h1 class="text-danger">Snack 3</h1>
    <?php
    foreach ($db as $role => $people) {
      $class = ($role === 'teachers') ? 'bg-light' : 'bg-success text-white';
      foreach ($people as $person) { ?>
        <div class="<?= $class ?>">
          <h4><?= $role ?>:</h4>
          <p><strong>Nome:</strong> <?= $person['name'] ?></p>
          <p><strong>Cognome:</strong> <?= $person['lastname'] ?></p>
        </div>
    <?php }
    }
    ?>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>