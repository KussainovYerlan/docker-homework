FROM php:fpm

COPY ./ /var/www/html
WORKDIR /var/www/html

# Обновляем список пакетов
RUN apt-get update -y

# Обновляем пакеты
RUN apt-get upgrade -y

# Устанавливаем нужные пакеты
RUN apt-get install -y zip
RUN apt-get install -y vim
RUN apt-get install -y git
RUN apt-get install -y curl

RUN docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql 

# Чистим за собой кэш
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

EXPOSE 9000

# Запускаем скрипт, при старте контейнера, который запустит все остальное.
CMD ["php-fpm"]
