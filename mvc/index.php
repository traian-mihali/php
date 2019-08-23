<html>
  <head>
    <style>
      body {
        padding: 30px;
      }

      h1 {
        color: rgb(64, 64, 192);
      }

      button {
        background-color: rgb(95, 95, 214);
        padding: 10px 16px;
      }

      button > a {
        text-decoration-line: none;
        color: white;
        font-size: 1rem;
      }

      button:hover {
        background-color: rgb(92, 92, 126);
      }
    </style>
  </head>

  <body>
    <?php

        include_once 'controllers/GreetingsController.php';
        include_once 'controllers/DefaultController.php';
        include_once 'models/GreetingsModel.php';

        $action = isset($_GET['a']) ? $_GET['a'] : '';
        $model = isset($_GET['m']) ? $_GET['m'] : '';

        switch ($model) {
            case 'greetings':
                $controller = new GreetingsController();
                break;
            default:
                $controller = new DefaultController();
        }

        if ($action) {
            $controller->run($action);
        } else {
            $controller->default();
        } ?>
  </body>
</html>
