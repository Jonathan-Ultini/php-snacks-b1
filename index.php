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
    <h1 class="text-center mb-5">Elenco dei Post</h1>

    <?php
    $posts = [
      '10/01/2019' => [
        [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
        ],
        [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
        ],
        [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
        ]
      ],
      '10/02/2019' => [
        [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
        ],
        [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
        ]
      ],
      '15/05/2019' => [
        [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
        ],
        [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
        ],
        [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
        ],
        [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
        ]
      ],
    ];
    ?>

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

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>