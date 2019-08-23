<html>
  <head>
    <link rel="stylesheet" href="styles.css" />
    <title>MVC Pattern</title>
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
