FROM php:8.2-apache
COPY public/ /var/www/html/
RUN echo "<?php header('Access-Control-Allow-Origin: *'); ?>" > /var/www/html/cors.php
EXPOSE 80
