FROM php:fpm-alpine

# Cài đặt các tiện ích cần thiết và phần mở rộng PHP
RUN apk --no-cache add \
    curl \
    unzip \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli pdo_mysql

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt Eloquent (illuminate/database)
WORKDIR /usr/share/nginx/html

RUN composer require illuminate/database vlucas/phpdotenv


# Hiển thị port 9000
EXPOSE 9000

# Kiểm tra phiên bản Composer để đảm bảo cài đặt thành công
RUN composer --version
