# Use a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instale extensões necessárias (se houver)
RUN docker-php-ext-install pdo pdo_mysql

# Copie o código do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Exponha a porta 80
EXPOSE 80
