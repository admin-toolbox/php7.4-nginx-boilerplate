<?php

require("vendor/autoload.php");

$fw = \Base::instance();

$fw->route("GET /", function(\Base $fw, $args) {
    phpinfo();
});

$fw->run();

?>