<?php

$format = <<<OUTPUT
Hello world from %s!

OUTPUT;

printf($format, basename(__FILE__));
