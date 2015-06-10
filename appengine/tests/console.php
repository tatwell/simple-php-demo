<?php
require(dirname(__DIR__). '/simpletest/autorun.php');

class CommandLineSuite extends TestSuite {
    function __construct() {
        parent::__construct();
        $this->addFile(__DIR__ . '/test_exercise.php');
    }
}
