# Description
Test simple avec Behat/Mink et Selenium

# Installation
php composer.phar install
docker run -d -p 4444:4444 -p 49338:5900 -v /dev/shm:/dev/shm selenium/standalone-chrome-debug:2.53.1-beryllium

# Exécution
vendor/bin/behat