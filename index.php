<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.min.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>

      <?php 
        include('parts/home-tabs.php');

        //print_r($_GET);
        echo $_GET['page']         ?>
      

      <div class="box">
          <a href="about.html" class="button is-primary">
              About
          </a>
          <a class="button is-info">Info</a>
          <a class="button is-success">Success</a>
      </div>
    </div>
  </section>
  </body>
</html>