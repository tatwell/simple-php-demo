# Simple PHP Demo

- Production Website: https://tatwell-php-demo.appspot.com/

## Development

### Setup

Google App Engine requires the [Google SDK for PHP](https://cloud.google.com/appengine/docs/php/)
and PHP 5.5 or higher.

To clone the repository:

    git clone https://github.com/tatwell/simple-php-demo.git

### Local Server

Run the local Google App Engine development server at port 3333 from the project root
directory:

    dev_appserver.py --port=3333 --admin_port=3334 --api_port=3335 \
      --php_executable_path=/usr/bin/php-cgi \
      ./appengine

On Linux, specify the PHP executable path. To locate:

    which php

### Tests

    php ./appengine/tests/*

### Deployment

To deploy the application to the Google App Engine platform:

    appcfg.py update ./appengine
