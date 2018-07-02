#Screenchef-php
This project use Grunt for dev and Heroku php for hosting.
Based on grunt-php for local php server

## Dist Notes
Heroku host does not need to run grunt commands. "app" root has all css, php, js files

## Setup Local Instance

1. npm install

2. set remote heroku path
     
     - heroku git:remote -a screenchef-php


3. Install Composer for PHP (grunt)

     In Terminal:
     
     - php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
     - php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
     - php composer-setup.php
     - php -r "unlink('composer-setup.php');"
     
     (Reference:  Download composer for php: https://getcomposer.org/download/)

4. Setup Composer

     Run in Terminal:

     - php composer-setup.php
          (Reference: https://getcomposer.org/download/)

     - php composer.phar install 
          (Installs dependencies 'vendor' folder)


5. In Terminal:
     - grunt

     Should boot up local instance: http://localhost:8080


## Setup New Heroku Project
https://devcenter.heroku.com/articles/deploying-php

- Install/Setup composer for PHP - above

### Create Procfile for Heroku hosting
     Include:
     web: vendor/bin/heroku-php-apache2 app/

     (app) is the root

### Setup Buildpacks for Heroku hosting
     We use two buildpacks to enable us to compile frontend assets with Grunt

     1. heroku buildpacks:set heroku/nodejs
     2. heroku buildpacks:set heroku/php --index 2

     Run git push heroku master to create a new release using these buildpacks.

### Reference
     Deploying PHP apps on heroku: https://devcenter.heroku.com/articles/deploying-php