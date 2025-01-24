FROM php:8.1-apache

# Скопировать все файлы в рабочую директорию
COPY . /var/www/html/

# Установить рабочую директорию
WORKDIR /var/www/html/

# Открыть порт 80
EXPOSE 80

# Команда запуска Apache
CMD ["apache2-foreground"]
