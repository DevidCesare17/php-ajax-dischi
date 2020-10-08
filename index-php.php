<?php include "db.php" ?>

<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP musica</title>
      <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
      <header>
        <div class="container">
          <img src="img/logo.png" alt="logo">
        </div>
      </header>

      <main>
        <div class="container main_container">
          <?php foreach ($database as $array): ?>
            <div class="cds_cont">
              <img class="album_img" src="<?php echo $array["poster"]; ?>" alt="">
              <h3 class="album_name"><?php echo $array["title"]; ?></h3>
              <p class="album_author"><?php echo $array["author"]; ?></p>
              <p class="album_year"><?php echo $array["year"]; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </main>
    </body>
  </html>
