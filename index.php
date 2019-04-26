<?php

use DebugBar\StandardDebugBar;

error_reporting(E_ALL);
set_error_handler(function ($level, $message, $file = '', $line = 0) {
    if (error_reporting() & $level) {
        throw new \ErrorException($message, 403, $level, $file, $line);
    }
});
set_exception_handler(function ($e) {
    echo($e);
});
register_shutdown_function(function () {
    echo(error_get_last());
});

require_once 'vendor/autoload.php';
$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();
$debugbar["messages"]->addMessage("hello world!");

?>
<html>
<head>
    <?php echo $debugbarRenderer->renderHead() ?>
</head>
<body>
...
<?php echo $debugbarRenderer->render() ?>
</body>
