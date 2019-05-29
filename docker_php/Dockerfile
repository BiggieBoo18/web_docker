FROM php:7-fpm
RUN apt update && apt install -y \
   vim \
   zip \
   unzip \
   iputils-ping \
   git
RUN docker-php-ext-install pdo_mysql