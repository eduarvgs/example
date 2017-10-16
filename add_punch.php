<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.min.css">

        <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">

        <link rel="stylesheet" type="text/css" href="wickedpicker/stylesheets/wickedpicker.css">

        <script src="jquery-ui/external/jquery/jquery.js" type="text/javascript"></script>

        <script src="jquery-ui/jquery-ui.js" type="text/javascript"></script>

        <script src="wickedpicker/src/wickedpicker.js" type="text/javascript"></script>

        <title>
            Project Eduar Vegas
        </title>
        
      </head>
      <body>
  
      <?php 
          include('parts/navbar.php');

          $title='Add Punch';  
          include('parts/hero.php');

          include('parts/punch_form.php');
      
          include('parts/footer.php');
      ?>  

  </body>
</html>