docker run -it --rm --name my-php-script -p 8888:8888 -v "$(pwd):/usr/src/myapp" -w /usr/src/myapp php:7.0-cli php -S 0.0.0.0:8888 index.php
