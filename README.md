Screenchef-php

# Dist Notes
Heroku host does not need to run grunt commands. "app" root has all css, php, js files

## Setup Heroku

### Procfile for Heroku hosting
Include:
web: vendor/bin/heroku-php-apache2 app/

(app) is the root

### Buildpacks for Heroku hosting
We use two buildpacks to enable us to compile frontend assets with Grunt

1. heroku buildpacks:set heroku/nodejs
2. heroku buildpacks:set heroku/php --index 2

Run git push heroku master to create a new release using these buildpacks.

# Dev Notes
Based on grunt-php for local php server

## Install
npm install

## Run
grunt

