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

        </div>
      </main>

      <!-- template -->
      <script id="music_template" type="text/x-handlebars-template">
        <div class="cds_cont">
          <img class="album_img" src="{{{poster}}}" alt="">
          <h3 class="album_name">{{title}}</h3>
          <p class="album_author">{{author}}</p>
          <p class="album_year">{{year}}</p>
        </div>
      </script>
      <!-- /template -->

      <script src="dist/app.js" charset="utf-8"></script>
    </body>
  </html>
