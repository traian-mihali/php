<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Main</title>

    <style>
      body {
        margin: 0px;
        padding: 0px;
        background-color: #E9ECEF
      }

      button > a, button > a:hover {
          text-decoration: none;
          color: white;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <h1 class="display-4">Main Page</h1>

      <p class="lead">
        <?php echo date('l, F jS, Y'); 
        ?>
      </p>
      <hr class="my-4">
      <p class="lead">
        <?php include("variables.php") ?>
      </p>
      <button class="btn btn-primary btn-lg">
        <a href="info.php">Info Page</a>
      </button>
    </div>
  </body>
</html>
