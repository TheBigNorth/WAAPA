<?php

use \App\Bootstrap;

?>

<!doctype html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <div>
        <br/><br/><a href="/">Home</a> <a href="/hello-world">Hello World</a> <a href="/sample-page">Sample Page</a>
    </div>
    <?php
        Bootstrap::init();
        wp_footer();
    ?>
</body>
</html>


