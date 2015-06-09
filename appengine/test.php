<?php
require_once('simpletest/simpletest.php');
require_once('simpletest/unit_tester.php');

class DemoReporter extends HtmlReporter {

    function paintHeader($test_name) {
        $header_template = <<<HTML_HEAD
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- These 3 meta tags *must* come first in the head -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Any other head content must come *after* these tags -->

    <title>SimpleTest Tests</title>

    <style type="text/css">
      body { padding: 1em; }
      div.result span.name { padding:0 1em; font-weight: bold; }
      div.result span.message { font-family: monospace; }
      .fail { background-color: inherit; color: red; }
      .pass { background-color: inherit; color: green; }
      pre { background-color: lightgray; color: inherit; }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <h1>SimpleTest Tests</h1>
    <h4>return <a href='/'>home</a></h4>
HTML_HEAD;
        printf($header_template);
    }

    function paintPass($message) {
        $format = <<<HTML_DIV
<div class="result">
  <span class="pass">Pass</span>
  <span class="name">%s</span>
  <span class="message">%s</span>
</div>
HTML_DIV;

        $breadcrumb = $this->getTestList();
        array_shift($breadcrumb);
        printf($format, $breadcrumb[2], $message);
    }
}

$test = new TestSuite('Demo Test');
$test->addFile('tests/test_exercise.php');
$test->run(new DemoReporter());
