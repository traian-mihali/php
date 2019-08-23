<html>

<head>
</head>

<body>
    <?php

        include_once 'controllers/HelloController.php';
        include_once 'controllers/GoodbyeController.php';
        include_once 'controllers/RudeController.php';
        include_once 'controllers/DefaultController.php';

        echo
        '<h1>Home Page</h1>
        <ul>
            <li>
                <a href="index.php?m=greetings&a=hello">Say Hello</a>
            </li>
            <li>
                <a href="index.php?m=greetings&a=goodbye">Say Goodbye</a>
            </li>
            <li>
                <a href="index.php?m=greetings&a=rude">Be Rude</a>
            </li>
        </ul>
        ';

        $action = isset($_GET['a']) ? $_GET['a'] : 'default';

        switch ($action) {
            case 'hello':
                $controller = new HelloController();
                break;
            case 'goodbye':
                $controller = new GoodbyeController();
                break;
            case 'rude':
                $controller = new RudeController();
                break;
            default:
                $controller = new DefaultController();
        }

        $controller->run($action);
    ?>
</body>

</html>