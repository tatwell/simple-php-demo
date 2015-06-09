<?php

/*
 *  Simple PHP Demo Index Page
 *  A simple self-organized mostly static PHP-templated web page.
 *
 *  Based on Bootstrap Template Sticky Footer with Navbar:
 *  http://getbootstrap.com/examples/sticky-footer-navbar/
 *
 */

// Content
$content = <<<HTML_CONTENT
      <div class="page-header">
        <h1>Simple PHP Demonstration</h1>
      </div>

      <div id="overview" class="page-section">
        <h2>Overview</h2>

        <p>Coding is an essential part of software development and often the defining
           competency of a software developer. But coding skill alone will not guarantee
           a developer, or a software project, success.</p>
        <p>An accomplished developer will also need to be skilled in requirements
           gathering, communication (technical and non-technical), basic cost-benefit
           analysis, source control management, self-management, documentation, testing,
           code maintenance, and deployment (DevOps).</p>
        <p>This web application fulfills the requirements of the coding challenge
           presented. It also demonstrates the broader context of challenges that
           any project must meet. Each section below summarizes a different challenge
           almost every modern software project must address and showcases a simple but
           effective response to that challenge.</p>
      </div>

      <div id="exercise" class="page-section">
        <h2>Code Exercise</h2>

        <p>Code exercise was an online test completed at <a href="https://tests4geeks.com/"
           target="_blank"> Tests for Geeks</a>.</p>
        <p>See Tests section below for a few unit tests based on problems from that test.</p>
      </div>

      <div id="project" class="page-section">
        <h2>Project Management</h2>

        <p>Development of this small web application has been managed using a
           <a href="http://en.wikipedia.org/wiki/Kanban_board" target="_blank">kanban board</a>
            under <a href="https://trello.com/" target="_blank">Trello's free online
            service</a>.</p>
        <p>Adapting <a href="http://en.wikipedia.org/wiki/Agile_software_development"
           target="_blank">Agile development practices</a>, features have been organized
          into functional and non-functional user stories.</p>
        <p>To see completed tasks and the current backlog, visit:</p>
        <p><a href="https://trello.com/b/5g7Y7vwb/php-demo" target="_blank">
            https://trello.com/b/5g7Y7vwb/php-demo</a></p>
      </div>

      <div id="source" class="page-section">
        <h2>Source Control</h2>

        <p>Intelligent people can disagree over whether <a href="http://git-scm.com/"
           target="_blank">Git</a> or <a href="http://mercurial.selenic.com/"
           target="_blank">Mercurial</a> is superior. But nowadays professional
           developers will generally prefer some type of <a
           href="http://en.wikipedia.org/wiki/Distributed_revision_control"
           target="_blank">distributed version control system</a> (DVCS) to manage
           and share their source code.</p>
        <p>This small project is being pushed to a Git repository on
           <a href="https://github.com/" target="_blank">Github</a>. The repository
           includes a friendly README file to help new developers to get involved as
           quickly and simply as possibly.</p>
        <p>The repository is public and may be found here:</p>
        <p><a href="https://github.com/tatwell/simple-php-demo"
           target="_blank">https://github.com/tatwell/simple-php-demo</a></p>
      </div>

      <div id="tests" class="page-section">
        <h2>Testing</h2>

        <p>Automated tests are an essential component of any serious software project,
           from a simple library developed by a single independent developer to a
           massive project being maintained by a global team or community. Tests help
           developers comprehend application functionality, reason about code logic,
           integrate new contributions, and avoid errors and <a
           href="http://en.wikipedia.org/wiki/Software_regression"
           target="_blank">regressions</a>.</p>
        <p>A simple suite of tests using <a href="http://simpletest.org/index.html"
           target="_blank">SimpleTest</a> for this project may be found here:</p>
        <p><a href="/test">SimpleTest Tests</a></p>
        <p>Source: <a
           href="https://github.com/tatwell/simple-php-demo/tree/master/appengine/tests"
           target="_blank">
           tests directory</a></p>
      </div>

      <div id="dev-ops" class="page-section">
        <h2>DevOps / Deployment</h2>
        <p><a href="http://en.wikipedia.org/wiki/DevOps" target="_blank">Development
           Operations</a> (DevOps) has emerged in recent years as a catchphrase for all
           the additional responsibilites the modern full-stack developer must assume
           in assuring that his code is not only developed properly but also released
           successfully.</p>
        <p>Many of the complications associated with server provisioning and application
           deployment have been circumvented here by adopting the <a
           href="https://cloud.google.com/appengine/docs/php/" target="_blank">Google
           App Engine runtime for PHP</a> as the service platform for running this
           application.</p>
        <p>Cloud-based platforms like <a href="https://cloud.google.com/appengine/"
           target="_blank">Google's App Engine</a> have their pros and cons. However,
           for a simple proof-of-concept project like this one, or for a project that
           expects to scale significantly, it is hard to overstate their relative ease
           and utility.</p>
        <p>The Google App Engine control panel for this application may be found here*:</p>
        <p><a
           href="https://console.developers.google.com/project/tatwell-php-demo/appengine?moduleId=default"
           target="_blank">https://console.developers.google.com/project/tatwell-php-demo</a></p>
        <p>*Google Developers Console requires a Google account for access. Email
           tatwell@gmail.com for project access. Screenshots available upon request.</p>
      </div>
HTML_CONTENT;

// Local Javascript
$local_js = <<<LOCAL_JS
        var demoModule = demoModule || {};

        // IIFE Module Pattern
        (function(module) {

          module.highlightTabs = function() {
            $('ul.navbar-nav li').on('click', function() {
              $('ul.navbar-nav li').removeClass('active');
              $(this).addClass('active');
            });
          };

          module.onReady = function() {
            module.highlightTabs();
          };

        })(demoModule);

        $(document).on('ready', demoModule.onReady);
LOCAL_JS;

// Custom Css: inserted into template header
$custom_css = <<<CUSTOM_CSS
      /* Sticky footer styles
      -------------------------------------------------- */
      html {
        position: relative;
        min-height: 100%;
      }
      body {
        /* Margin bottom by footer height */
        margin-bottom: 60px;
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 60px;
        background-color: #f5f5f5;
      }


      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      body > .container {
        padding: 60px 15px;
      }
      .container .text-muted {
        margin: 20px 0;
      }

      .footer > .container {
        text-align: center;
        padding-right: 15px;
        padding-left: 15px;
      }

      code {
        font-size: 80%;
      }

      /* Adjust for navbar:
         https://github.com/twbs/bootstrap/issues/1768#issuecomment-46519033 */
      div.page-section:before {
        display: block;
        content: " ";
        margin-top: -60px;
        height: 60px;
        visibility: hidden;
      }
CUSTOM_CSS;

// Bootstrap Layout Template
$bootstrap_layout = <<<HTML_LAYOUT
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- These 3 meta tags *must* come first in the head -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Any other head content must come *after* these tags -->
    <meta name="description" content="%s">
    <meta name="author" content="%s">
    <!-- <link rel="icon" href="%s"> -->

    <title>%s</title>

    <style>%s</style>

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

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        %s
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      %s
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Prepared by Tom Atwell (tatwell@gmail.com)</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script>
      %s
    </script>
  </body>
</html>
HTML_LAYOUT;

// Navbar
$navbar = <<<NAVBAR
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">PHP Demo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#overview">Overview</a></li>
            <li><a href="#exercise">Code Exercise</a></li>
            <li><a href="#project">Project Management</a></li>
            <li><a href="#source">Source Control</a></li>
            <li><a href="#tests">Tests</a></li>
            <li><a href="#dev-ops">DevOps</a></li>
          </ul>
        </div><!--/.nav-collapse -->
NAVBAR;

// Template head variables.
$title = 'Simple PHP Demo';
$author = 'tatwell@gmail.com';
$description = 'Code exercise in application for PHP developer position.';
$favicon = '';

// A crude templating mechanism: order matters.
printf($bootstrap_layout,
    $description,
    $author,
    $favicon,
    $title,
    $custom_css,
    $navbar,
    $content,
    $local_js
);
