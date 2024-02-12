# About

## Versions
- mysql:5.7.18
- php:8.3.1-apache
    - node 21.x
    - twig:^3.0
- adminer:latest

## Manual installation
Because I didn't handle with automatic installation of these packages, you should do it manually.
- composer require 'twig/twig:^3.0'
- npm install -D tailwindcss
- npx tailwindcss init
- npx tailwindcss -i ./css/input.css -o ./css/output.css --watch