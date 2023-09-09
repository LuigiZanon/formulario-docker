# Use a imagem oficial do PHP
FROM php:7.4-apache

# Habilitar módulo mysqli do PHP
RUN docker-php-ext-install mysqli

# Copiar o código-fonte do aplicativo para o contêiner
COPY . /var/www/html/

# Expor a porta 80
EXPOSE 80
