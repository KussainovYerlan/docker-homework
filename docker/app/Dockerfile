FROM php:fpm

# Копируем исходный код
COPY ./ /var/www/html
WORKDIR /var/www/html

# Обновляем список пакетов
RUN apt-get update -y

# Устанавливаем нужные пакеты
RUN apt-get install -y \
    zip \
    vim \
    git \
    curl

RUN docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql 

# Чистим за собой кэш
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

EXPOSE 9000

# Запускаем скрипт, при старте контейнера, который запустит все остальное.
CMD ["php-fpm"]