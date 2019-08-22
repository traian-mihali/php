<div class="jumbotron">
    <?php
        echo '<p>HTTP_HOST: '.$_SERVER['HTTP_HOST']."</p>";
        echo '<p>HTTP_CONNECTION: '.$_SERVER['HTTP_CONNECTION']."</p>";
        echo '<p>HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT']."</p>";
        echo '<p>SERVER_SOFTWARE: '.$_SERVER['SERVER_SOFTWARE']."</p>";
        echo '<p>SERVER_NAME: '.$_SERVER['SERVER_NAME']."</p>";
        echo '<p>SERVER_PORT: '.$_SERVER['SERVER_PORT']."</p>";
        echo '<p>DOCUMENT_ROOT: '.$_SERVER['DOCUMENT_ROOT']."</p>";
        echo '<p>SERVER_PROTOCOL: '.$_SERVER['SERVER_PROTOCOL']."</p>";
        echo '<p>REQUEST_METHOD: '.$_SERVER['REQUEST_METHOD']."</p>";
        echo '<p>REQUEST_URI: '.$_SERVER['REQUEST_URI']."</p>";
        echo '<p>NUMBER_OF_PROCESSORS: '.$_ENV['NUMBER_OF_PROCESSORS']	."</p>";
        echo '<p>PROCESSOR_ARCHITECTURE: '.$_ENV['PROCESSOR_ARCHITECTURE']."</p>";
    ?>
</div>
