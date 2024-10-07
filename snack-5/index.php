<?php require_once __DIR__ . "/functions.php"  ?>


<!DOCTYPE html>
<html lang="it">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Snack-5</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <h1 class="text-center text-primary mb-5">Prova funzioni</h1>
    <form method="GET" action="">
      <div class="form-group">
        <label for="word">Inserisci una parola o frase:</label>
        <input type="text" class="form-control" id="word" name="word" required>
      </div>
      <button type="submit" class="btn btn-primary">Controlla Palindromo</button>
    </form>

    <?php
    if (isset($_GET['word'])) {
      $input = $_GET['word'];
      if (isPalindrome($input)) {
        echo "<p class='text-success text-center mt-3'>La parola/frase $input è un palindromo!</p>";
      } else {
        echo "<p class='text-danger text-center mt-3'>La parola/frase $input non è un palindromo.</p>";
      }
    }
    ?>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>





</html>